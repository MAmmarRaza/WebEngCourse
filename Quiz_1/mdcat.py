matric=int(input("Enter matric marks: "))
fsc=int(input("Enter matric FSc marks: "))
mdcat=int(input("Enter mdcat marks: "))

cMatric= ((matric/1100*100)/100)*10
cFsc= ((fsc/1100*100)/100)*40
cMdcat= ((mdcat/200*100)/100)*50
print(cMatric+cFsc+cMdcat)