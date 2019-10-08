insert into subcategory (subcat_id,cat_id,subcat_name) values (5,1,'Laptops'),(6,1,'Desktops'),(7,1,'Audio Devices');
insert into subcategory (subcat_id,cat_id,subcat_name) values (8,2,'Blocks and Buiilding Toys'),(9,2,'Bath Toys'),(10,2,'Board Games');
update subcategory set subcat_name=	'Audio devices' where subcat_id=7;
insert into product (product_id,product_name,description,base_price,cat_id,subcat_id) values (2,'Casio G-SHOCK','Waterproof watch made by Casio',13100.00,1,3);
	insert into product (product_id,product_name,description,base_price,cat_id,subcat_id) values (3,'Nitro Car','Remote controlled car made by Nerf',2495.00,2,3);
insert into product (product_id,product_name,description,base_price,cat_id,subcat_id) values (4,'Asus Vivobook','Intel core i3 3.4Ghz',123100.00,1,5);
	insert into product (product_id,product_name,description,base_price,cat_id,subcat_id) values (5,'Dell Optiplex','Intel core i3 2.7Ghz',163572.00,1,6);