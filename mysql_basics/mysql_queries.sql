SELECT `username` FROM `user` where `username`='owl'
UPDATE `user` SET `email`='myawesomeemail' WHERE `username`='owl'
INSERT INTO `user` SET `username`='Mandy', `email`='greatemail@email.com', `password`=sha1('thisisagreatpassword')
DELETE FROM `user` WHERE `username`='Mandy'
INSERT INTO `todo items` ('title', 'details') VALUES ('one', 'two')
INSERT INTO `todo items` SET `title`= 'two', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'three', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'four', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'five', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'six', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'seven', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'eight', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'nine', `details`= 'asdf'
INSERT INTO `todo items` SET `title`= 'ten', `details`= 'asdf'
UPDATE `todo items` SET `title`='mynewtodo',`details`='asdfas' WHERE `ID`='2'
UPDATE `todo items` SET `title`='todo list',`details`='asdfas' WHERE `ID`= '2'
SELECT `user_id`= '0', `user_id`= '1' FROM `todo items`