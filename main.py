from tkinter import *
import tips
from random import choice
import webbrowser as wb
import importlib
ShowString=""
def a():
    win.geometry('646x480')
def reload():
    global ShowString,FinalShow
    ShowString=""
    names=open(".//GroupName",mode="r")
    num=open(".//GroupScore",mode="r")
    s1=names.read().split()
    s2=num.read().split()
    for i in range(len(s1)):
        space=''
        for y in range(40-len(s2[i])-len(s1[i])):
            space+=' '
        ShowString+=s1[i]+space+s2[i]+'\n'
    importlib.reload(tips)
    names.close()
    num.close()
    FinalShow.set(ShowString)
    rext.set(choice(tips.tip))
    win.after(10000,reload)
def edit():
    wb.open('http://127.0.0.1:8080')
win=Tk()
win.attributes('-alpha',0.5)
FinalShow=StringVar()
Label(textvariable=FinalShow,font='Unifont 24').pack()
win.title('Web:1.1,App:1.0.6')
rext=StringVar()
Label(fg='#FF0000',textvariable=rext,font='Unifont 48').pack()
Button(text='Edit',command=edit).place(x=0,y=490)
reload()
win.protocol('WM_DELETE_WINDOW',a)
win.mainloop()
