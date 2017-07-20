CREATE DATABASE 'shop_ex'
CREATE TABLE 'product'(

`id` INT PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR (255),
`price` FLOAT,
`description` VARCHAR (255)
)

CREATE TABLE 'customers'(

`id` INT PRIMARY KEY AUTO_INCREMENT,
`name` VARCHAR (255),
`surname` VARCHAR (255),
`email` VARCHAR (255) UNIQUE
`password` VARCHAR (255)
`shipping_address` VARCHAR (255)
)

CREATE TABLE 'orders' (

`id` INT PRIMARY KEY AUTO_INCREMENT,
`price_of_order` FLOAT,
`customers_id` INT, --jakiś join z tabeli customers
`customers_address` VARCHAR (255)
`products` VARCHAR(255) --join z tabeli product
`status` VARCHAR (255)


)
