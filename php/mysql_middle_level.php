<?php

// 在数据库test中的一个表student,字段是name,class,score

// 1,算出每个班级中的学生，按成绩倒序排列
// SELECT name,class,score from student order by class,score desc

// 2,查出每个班级的及格人数和不及格人数，格式为：class,及格人数，不及格人数 //"矛盾题"

// SELECT class
// SUM(CASE WHEN score >= 60 THEN 1 ELSE 0 END),
// SUM(CASE WHEN score < 60 THEN 1 ELSE 0 END),
// FROM student GROUP BY class

// 或者
// SELECT class
// SUM(IF(score >= 60,1,0)),
// SUM(IF(score < 60,1,0))
// FROM student GROUP BY class

// 3,用php实现步骤2
