import pandas as pd
import numpy as np
import collections
import math
from numpy import linalg as LA
import re

def calculateTF(wordset,bow):
    termfreq_diz = dict.fromkeys(wordset,0)
    counter1 =  dict(collections.Counter(bow))
    for w in bow:
        termfreq_diz[w]=counter1[w]/len(bow)
    return termfreq_diz

def calculate_IDF(wordset,bow):
    d_bow = {'bow_{}'.format(i):list(set(b)) for i,b in enumerate(bow)}
    N=len(d_bow.keys())
    l_bow = []
    for b in d_bow.values():
        l_bow+=b
    counter = dict(collections.Counter(l_bow))
    idf_diz=dict.fromkeys(wordset,0)
    for w in wordset:
        idf_diz[w] = np.log((1+N)/(1+counter[w]))+1
    return idf_diz


def calculate_TF_IDF(wordset,tf_diz,idf_diz):
    tf_idf_diz = dict.fromkeys(wordset,0)
    for w in wordset:
       tf_idf_diz[w]=tf_diz[w]*idf_diz[w]
    tdidf_values = list(tf_idf_diz.values())
    l2_norm = LA.norm(tdidf_values)   
    tf_idf_norm = {w:tf_idf_diz[w]/l2_norm for w in wordset}
    return tf_idf_norm

def cal(array1, array2):
    wordset =  np.union1d(array1,array2)
    arr = array1 + array2
    termfreq_diz = calculateTF(wordset,arr)
    print(termfreq_diz)
    idf_diz = calculate_IDF(wordset,[array1,array2])
    print(idf_diz)
    tf_idf = calculate_TF_IDF(wordset,termfreq_diz,idf_diz)
    df_tfidf = pd.DataFrame([tf_idf])
    print(df_tfidf)
    max = df_tfidf.idxmax(axis=1).values.tolist()
    print(max[0])
    return max[0]
