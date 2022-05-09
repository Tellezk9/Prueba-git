-- SELECT * FROM `basic`.`posts`;

SELECT * FROM 'basic'.'users' Where id In (SELECT 'user_id' FROM 'posts')