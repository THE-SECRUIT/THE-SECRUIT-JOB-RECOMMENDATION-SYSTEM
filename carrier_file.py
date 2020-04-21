#!/usr/bin/env python
# coding: utf-8

# %%
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn import svm
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.naive_bayes import MultinomialNB, GaussianNB
from sklearn.model_selection import train_test_split
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import linear_kernel
from sklearn import preprocessing
from sklearn.preprocessing import LabelEncoder

# %%
#df1=pd.read_csv('pro.csv')
df2=pd.read_csv('pro.csv')
df2= df2.iloc[:,1:]
# df1['Index'] = np.arange(len(df1))
# df1.set_index('Index')
# import csv
df10= df2.iloc[:,:7].join(df2.iloc[:,23:25]).join(df2.iloc[:,26:27]).join(df2.iloc[:,33:34]).join(df2.iloc[:,-1:]) # df1["Suggested Job Role"]
#df10.head()

# %%
from sklearn.utils import shuffle
df = shuffle(df10)
df= df.dropna()
df101=df

# %%
fitdf= pd.DataFrame(df10.iloc[:,:17])

# %%
fitdf.head(2)

from sklearn.preprocessing import LabelEncoder
label_encoder = preprocessing.LabelEncoder()
df['Interested subjects']= label_encoder.fit_transform(df['Interested subjects'])
df['Interested subjects'].unique()

# from sklearn.preprocessing import LabelEncoder
label_encoder2 = preprocessing.LabelEncoder()
df['interested career area']= label_encoder2.fit_transform(df['interested career area'])
df['interested career area'].unique()

label_encoder3 = preprocessing.LabelEncoder()
df['Suggested Job Role']= label_encoder3.fit_transform(df['Suggested Job Role'])
df['Suggested Job Role'].unique()

label_encoder3 = preprocessing.LabelEncoder()
df['Type of company want to settle in?']= label_encoder3.fit_transform(df['Type of company want to settle in?'])
df['Type of company want to settle in?'].unique()

label_encoder4 = preprocessing.LabelEncoder()
df['Management or Technical']= label_encoder4.fit_transform(df['Management or Technical'])
df['Management or Technical'].unique()

#labelencoder = LabelEncoder()

#df= labelencoder.fit_transform(df)
df.iloc[:,:].head(2)

# %%
train= df[:df.shape[0]*80//100].dropna()
test= df[df.shape[0]*80//100:].dropna()

# %%
X_test= test.iloc[:, :-1]
X_train= train.iloc[:, :-1]
y_test= test.iloc[:,-1:]
y_train= train.iloc[:,-1:]



X_train= np.array(X_train)
X_test= np.array(X_test)
y_train= np.array(y_train)
y_test= np.array(y_test)

# %%
from sklearn.neighbors import KNeighborsClassifier
knn= KNeighborsClassifier(n_neighbors= 10)
knn.fit(X_train, np.ravel(y_train,order='C'))
knn.score(X_test,y_test)*100

# %%
from sklearn import svm
svc = svm.SVC(kernel='linear', C=1)
svc.fit(X_train, y_train)
svc.score(X_test, y_test)*100

# %%
from sklearn.naive_bayes import MultinomialNB
# scaler = preprocessing.MinMaxScaler()
# all_features_minmax = scaler.fit_transform(all_features)
nb = MultinomialNB(alpha=0.1)
# cv_scores = cross_val_score(clf, all_features_minmax, all_classes, cv=10)
nb.fit(X_train, y_train)
nb.score(X_test, y_test)*100

# %%
#from sklearn.ensemble import RandomForestClassifier
#ranfor = RandomForestClassifier(n_estimators=10, random_state=10)
#ranfor.fit(X_train, y_train)
#ranfor.score(X_test, y_test)*100

# %%
from sklearn.linear_model import LogisticRegression
regressor = LogisticRegression(solver='saga', random_state=0)
regressor.fit(X_train, y_train)
regressor.score(X_test, y_test)*100

# %%
jobs= (df2[df.columns[-1]]).tolist()

# %%
def max5(arr,jobs):
    temp=[]
    arr=arr.tolist()
    for i in range(5):
        k=np.argmax(arr)
        temp.append(jobs[k])
        arr[k]=0
    return temp

import mysql.connector

mydb =  mysql.connector.connect(host="localhost",user="root",passwd="",database="carrier")

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM subjects")

result = mycursor.fetchall()

res0 = result[0][0]
res1 = result[0][1]
res2 = result[0][2]
res3 = result[0][3]
res4 = result[0][4]
res5 = result[0][5]
res6 = result[0][6]
res7 = result[0][7]
res8 = result[0][21]
res9 = result[0][22]
res10 =  result[0][31]



# %%
lul= int(np.floor(np.random.rand()*17217))
live= df.iloc[lul:lul+2, :-1]
tl=[res0, res1, res2, res3, res4, res5, res6, res7, res8, res9, res10]
#tl=[1, 0,8, 8, 39,77, 69, 80, 'IOT', 'testing','Management']
live= pd.concat([live, pd.DataFrame([tl], columns= df.columns[:-1])], sort=False)

live_df= live.iloc[:, :8]
for i, e in enumerate(live.columns[:]):
    if live.dtypes[i] == 'O':
        live_df[live.columns[i]]= live[live.columns[i]].astype('category').cat.codes
know= ((regressor.predict_proba(live_df)))[2]
jobs[np.argmax(know)]


print("Suggested Career Path: "+str(max5(know,jobs)))

res0=max5(know,jobs)[0]
res1=max5(know,jobs)[1]
res2=max5(know,jobs)[2]
res3=max5(know,jobs)[3]
res4=max5(know,jobs)[4]

mycursor.execute("""INSERT INTO `job` (`JOB1`,`JOB2`,`JOB3`,`JOB4`,`JOB5`) VALUE ('%s','%s','%s','%s','%s')""" % (res0,res1,res2,res3,res4))
mydb.commit()

