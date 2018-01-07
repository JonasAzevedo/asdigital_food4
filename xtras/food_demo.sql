CREATE TABLE `shop_products` (
`id` int(11) NOT NULL,
`product_name` varchar(60) NOT NULL,
`product_desc` text NOT NULL,
`product_code` varchar(60) NOT NULL,
`product_image` varchar(60) NOT NULL,
`product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;