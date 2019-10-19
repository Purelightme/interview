<?php

//在空表News中，字段id为自增主键，批量插入17条数据之后，发现最后三条数据有误，删除此三条数据之后，
//重启MySQL，再重新插入3条记录，请问最后一条记录的id是多少
//18。这里重启不重启，结果都一样。MySQL会留三个空位在那里，新来的数据，从后往前依次"占坑"



//有A(id,sex,par,c1,c2)，B(id,age,c1,c2)两张表，其中A.id与B.id关联，写出一条SQL，将其中B中age>50的记录的
//c1，c2更新到A表中
// update A,B set A.c1=B.c1,A.c2=B.c2 where A.id=B.id and B.age > 50