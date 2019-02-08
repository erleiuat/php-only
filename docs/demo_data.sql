-- Insert Types
INSERT INTO `types` (`Title`) VALUES
('Clothes'),
('Accessoires'),
('Electrics'),
('Others');

-- Insert Categories
INSERT INTO `categories` (`Title`, `Image`, `TypeID`) VALUES
('Shoes', 'shoes.jpg', '1'),
('Shirts', 'shirts.jpg', '1'),
('Hats', 'hats.jpg', '1'),
('Trousers', 'trousers.jpg', '1');

-- Insert Shoe-Subcategories
INSERT INTO `subcategories` (`CategoryID`, `Title`) VALUES
('1', 'Nike'),
('1', 'Adidas'),
('1', 'Geox'),
('1', 'Puma'),
('1', 'Bata');

-- Insert Shirt-Subcategories
INSERT INTO `subcategories` (`CategoryID`, `Title`) VALUES
('2', 'Nike'),
('2', 'Tommy Hilfiger'),
('2', 'Ralph Lauren'),
('2', 'Hugo Boss'),
('2', 'Lacoste');

-- Insert Hats-Subcategories
INSERT INTO `subcategories` (`CategoryID`, `Title`) VALUES
('3', 'Nike'),
('3', 'Gucci'),
('3', 'Versace');

-- Insert Trousers-Subcategories
INSERT INTO `subcategories` (`CategoryID`, `Title`) VALUES
('4', 'Diesel'),
('4', 'Under Armour'),
('4', 'Superdry');

-- Insert Shoe-items
INSERT INTO `items` (`SubcategoryID`, `Title`, `Image`, `Price`) VALUES
('1', 'Nike Air Max Plus', 'shoes (1).jpg', '122'),
('1', 'Nike Air Max Minus', 'shoes (2).jpg', '154'),
('1', 'Nike Air Min Plus', 'shoes (3).jpg', '183'),
('1', 'Nike Air Min Minus', 'shoes (4).jpg', '114'),
('1', 'Nike Water Max Plus', 'shoes (5).jpg', '198'),
('1', 'Nike Water Max Minus', 'shoes (6).jpg', '113'),
('1', 'Nike Water Min Plus', 'shoes (7).jpg', '100'),
('1', 'Nike Water Min Minus', 'shoes (8).jpg', '400'),
('4', 'Puma South Africa', 'shoes (9).jpg', '10'),
('4', 'Puma North Africa', 'shoes (10).jpg', '40'),
('4', 'Puma West Africa', 'shoes (11).jpg', '70'),
('4', 'Puma East Africa', 'shoes (12).jpg', '90');
