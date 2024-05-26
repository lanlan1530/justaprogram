from tkinter import *
import os
ShowString=""
def a():
    pass
def reload():
    global ShowString,FinalShow
    ShowString=""
    names=open(".//GroupName",mode="r")
    num=open(".//GroupScore",mode="r")
    s1=names.read().split()
    s2=num.read().split()
    for i in range(len(s1)):
        ShowString+=s1[i]+"                                                         "+s2[i]+'\n'
    names.close()
    num.close()
    FinalShow.set(ShowString)
    win.after(10000,reload)

win=Tk()
win.attributes('-topmost',0)
FinalShow=StringVar()
Label(textvariable=FinalShow).pack()
reload()
win.after(1000,reload)
win.protocol('WM_DELETE_WINDOW',a)
win.mainloop()