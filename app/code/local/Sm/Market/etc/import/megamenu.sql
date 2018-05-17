
INSERT INTO `sm_menu_groups` (`id`, `title`, `content`, `status`, `created_time`, `update_time`) VALUES
(1, 'SM Market vertical', '', 1, '2015-12-31 07:47:38', '2015-12-31 07:47:38'),
(2, 'SM Market horizontal', '', 1, '2014-08-14 01:55:36', '2014-08-14 01:55:36');

INSERT INTO `sm_menu_items` (`id`, `title`, `show_title`, `description`, `status`, `align`, `show_as_group`, `rgt`, `lft`, `depth`, `group_id`, `cols_nb`, `item_width`, `cols_width`, `icon_url`, `target`, `type`, `data_type`, `content`, `created_time`, `update_time`, `custom_class`) VALUES
(1, 'Root[SM Market vertical]', 1, '', 1, 1, 1, 48, 1, 0, 1, 6, 0, 0, '', '1', 0, '', '', '2012-07-31 02:52:58', '2012-07-31 02:52:58', ''),
(3, 'Automotive & Motorcycle', 1, '', 1, 1, 1, 7, 2, 1, 1, 4, 0, 0, 'http://yourdomain.com/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzkucG5nIn19/key/58349c3e118057ee9ddc2b9a65beee4f/', '3', 4, 'category/5', '', '2014-12-17 01:34:28', '2014-12-17 01:34:28', 'megamenu1'),
(84, 'Smartphone & Tablets', 1, '', 1, 1, 1, 23, 14, 1, 1, 6, 0, 0, 'http://yourdomain.com/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzIucG5nIn19/key/6b8f5fdc1b5cd0eb693217d944a78249/', '3', 4, 'category/50', '', '2014-12-17 01:36:11', '2014-12-17 01:36:11', 'megamenu3'),
(99, 'Health & Beauty', 1, '', 1, 1, 1, 25, 24, 1, 1, 5, 0, 0, 'http://yourdomain.com/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzMucG5nIn19/key/58349c3e118057ee9ddc2b9a65beee4f/', '3', 4, 'category/51', '', '2014-12-17 01:36:41', '2014-12-17 01:36:41', 'megamenu1'),
(100, 'Toys & Hobbies', 1, '', 1, 1, 1, 29, 28, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzQucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/49', '', '2014-12-17 01:37:32', '2014-12-17 01:37:32', ''),
(130, 'Sports & Outdoors', 1, '', 1, 1, 1, 13, 10, 1, 1, 5, 0, 0, 'http://yourdomain.com/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzEwLnBuZyJ9fQ,,/key/89758d1957b80ec6dd8d6f2d96d92aff/', '3', 4, 'category/72', '', '2014-12-17 01:35:46', '2014-12-17 01:35:46', 'megamenu2'),
(153, 'Mega menu 1 (content)', 2, '', 1, 1, 1, 6, 5, 2, 1, 6, 0, 0, '', '3', 7, '', '<div class="mega1-cont">\r\n<div class="inner">\r\n	<div class="mega1-col mega1-col1">\r\n    	<span class="mega-title">Automobile & Motorcycle</span>\r\n    	<ul>\r\n        	<li><a href="#">Diagnostic Tools</a></li>\r\n            <li><a href="#">Motorcycle Fairings</a></li>\r\n            <li><a href="#">Car GPS & Accessories</a></li>\r\n            <li><a href="#">Car DVRs</a></li>\r\n            <li><a href="#">Car Electronics</a></li>\r\n            <li><a href="#">Car Decals & Stickers</a></li>\r\n            <li><a href="#">Car Lighting</a></li>\r\n            <li><a href="#">Car Parts & Exterior Accessories</a></li>\r\n            <li><a href="#">Motorcycle Helmets</a></li>\r\n            <li><a href="#">Motorcyle Lighting</a></li>\r\n            <li><a href="#">Motorcycle Accessories</a></li>\r\n            <li><a href="#">Car Interior Accessories</a></li>\r\n        </ul>\r\n        <span class="mega-title">Car Lights</span>\r\n        <ul>\r\n            <li><a href="#">Car LED Light Bulbs</a></li>\r\n            <li><a href="#">HID Xenon Kits</a></li>\r\n            <li><a href="#">Car Decoration Lights</a></li>\r\n            <li><a href="#">Car Fog Lights</a></li>\r\n            <li><a href="#">Car Tail Lights</a></li>\r\n        </ul>\r\n    </div>\r\n    <div class="mega1-col mega1-col2">\r\n    	<span class="mega-title">Car Accessories</span>\r\n    	<ul>\r\n        	<li><a href="#">Car Chargers & Adapters</a></li>\r\n            <li><a href="#">Car Decorations</a></li>\r\n            <li><a href="#">Car Thermometers</a></li>          \r\n        </ul>\r\n        <span class="mega-title">Motorcycle Gadgets</span>\r\n        <ul>\r\n            <li><a href="#">Motorcycle Gear</a></li>\r\n            <li><a href="#">Motorcycle Lights</a></li>\r\n            <li><a href="#">Motorcycle Decorations</a></li>\r\n            <li><a href="#">Motorcycle Parts & Accessories</a></li>\r\n            <li><a href="#">Mirrors</a></li>\r\n            <li><a href="#">Other Gadgets</a></li>\r\n        </ul>\r\n    </div>\r\n</div>\r\n</div>\r\n', '2014-08-15 08:55:50', '2014-08-15 08:55:50', ''),
(159, 'Mega menu 3 (content)', 2, '', 1, 1, 1, 22, 15, 2, 1, 6, 0, 0, '', '3', 1, '', '', '2014-08-15 08:49:41', '2014-08-15 08:49:41', ''),
(160, 'Mega menu 2 (content)', 2, '', 1, 1, 1, 12, 11, 2, 1, 6, 0, 0, '', '3', 7, '', '<div class="mega1-cont">\r\n<div class="mega1-col mega1-col1">\r\n<span class="mega-title">Cycling Gear</span>\r\n<ul>\r\n<li><a href="#">Cycling Protective Gears</a></li>\r\n<li><a href="#">Cycling Accessories</a></li>\r\n<li><a href="#">Cycling Clothing</a></li>\r\n<li><a href="#">Bicycles Frames</a></li>\r\n</ul>\r\n<span class="mega-title">Camping &amp; Hiking Gear</span>\r\n<ul>\r\n<li><a href="#">Hammock</a></li>\r\n<li><a href="#">Telescope</a></li>\r\n<li><a href="#">Hat</a></li>\r\n<li><a href="#">Tent</a></li>\r\n<li><a href="#">Sleeping Bag</a></li>\r\n</ul>\r\n<span class="mega-title">Swim Gear</span>\r\n<ul>\r\n<li><a href="#">Women''s Swimwear</a></li>\r\n<li><a href="#">Men''s Swimwear</a></li>\r\n<li><a href="#">Kid''s Swimwear</a></li>\r\n<li><a href="#">Umbrella &amp; Raincoat</a></li>\r\n<li><a href="#">Other Outdoor Gear</a></li>\r\n<li><a href="#">Camping Lights</a></li>\r\n<li><a href="#">Bicycle Lights</a></li>\r\n</ul>\r\n</div>\r\n<div class="mega1-col mega1-col2"><a href="#"><img src="{{media url="wysiwyg/mega-menu/mega-banner.png"}}" alt="" /></a></div>\r\n</div>', '2014-08-15 08:56:10', '2014-08-15 08:56:10', ''),
(161, 'Root[SM Market horizontal]', 1, '', 1, 1, 1, 20, 1, 0, 2, 6, 0, 0, '', '1', 0, '', '', '2014-08-14 01:55:36', '2014-08-14 01:55:36', ''),
(162, 'New Arrivals', 1, '', 1, 1, 1, 7, 6, 1, 2, 1, 0, 0, 'http://yourdomain.com/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51L21lZ2EtaWNvbi5wbmcifX0,/key/6b8f5fdc1b5cd0eb693217d944a78249/', '3', 5, '15', '', '2015-01-14 08:44:29', '2015-01-14 08:44:29', ''),
(164, 'Deals', 1, '', 1, 1, 1, 11, 10, 1, 2, 1, 0, 0, '', '3', 5, '17', '', '2015-01-16 04:36:43', '2015-01-16 04:36:43', ''),
(165, 'Home', 1, '', 1, 1, 1, 5, 2, 1, 2, 1, 0, 0, '', '3', 1, '', '', '2016-03-23 03:24:57', '2016-03-23 03:24:57', 'home-item-menu'),
(166, 'About us', 1, '', 1, 1, 1, 19, 18, 1, 2, 1, 0, 0, '', '3', 5, '3', '', '2014-12-17 01:43:17', '2014-12-17 01:43:17', ''),
(167, 'Under 4.99', 1, '', 1, 1, 1, 9, 8, 1, 2, 1, 0, 0, '', '3', 5, '16', '', '2015-02-05 08:40:17', '2015-02-05 08:40:17', ''),
(168, 'Pages', 1, '', 1, 1, 1, 15, 12, 1, 2, 3, 0, 0, '', '3', 4, 'category/137', '', '2016-05-11 08:16:06', '2016-05-11 08:16:06', 'pages'),
(169, 'Contact us', 1, '', 1, 1, 1, 17, 16, 1, 2, 1, 0, 0, '', '3', 5, '14', '', '2014-12-17 01:42:57', '2014-12-17 01:42:57', ''),
(170, 'mega menu 3 - col1', 2, '', 1, 1, 1, 17, 16, 3, 1, 2, 0, 0, '', '3', 7, '', '\r\n	<div class="mega3-col">\r\n    	<span class="mega-title">Camping & Hiking Gear</span>\r\n        <ul>\r\n            <li><a href="#">Hammock</a></li>\r\n            <li><a href="#">Telescope</a></li>\r\n            <li><a href="#">Hat</a></li>\r\n            <li><a href="#">Tent</a></li>\r\n            <li><a href="#">Sleeping Bag</a></li>\r\n        </ul>\r\n         <span class="mega-title">Swim Gear</span>\r\n         <ul>\r\n            <li><a href="#">Women''s Swimwear</a></li>\r\n            <li><a href="#">Men''s Swimwear</a></li>\r\n            <li><a href="#">Kid''s Swimwear</a></li>\r\n            <li><a href="#">Umbrella & Raincoat</a></li>\r\n            <li><a href="#">Other Outdoor Gear</a></li>\r\n            <li><a href="#">Camping Lights</a></li>\r\n            <li><a href="#">Bicycle Lights</a></li>\r\n        </ul>\r\n    </div>\r\n', '2014-08-15 09:16:20', '2014-08-15 09:16:20', 'mega3-col1'),
(171, 'mega menu 3 - col2', 2, '', 1, 1, 1, 19, 18, 3, 1, 2, 0, 0, '', '3', 7, '', '<div class="mega3-col">\r\n        <span class="mega-title">Cycling Gear</span>\r\n    	<ul>\r\n        	<li><a href="#">Cycling Protective Gears</a></li>\r\n            <li><a href="#">Cycling Accessories</a></li>\r\n            <li><a href="#">Cycling Clothing</a></li>\r\n            <li><a href="#">Bicycles Frames</a></li>            \r\n        </ul>\r\n    	<span class="mega-title">Swim Gear</span>\r\n         <ul>\r\n            <li><a href="#">Women''s Swimwear</a></li>\r\n            <li><a href="#">Men''s Swimwear</a></li>\r\n            <li><a href="#">Kid''s Swimwear</a></li>\r\n            <li><a href="#">Umbrella & Raincoat</a></li>\r\n            <li><a href="#">Other Outdoor Gear</a></li>\r\n            <li><a href="#">Camping Lights</a></li>\r\n            <li><a href="#">Bicycle Lights</a></li>\r\n        </ul>\r\n</div>', '2014-08-15 09:16:57', '2014-08-15 09:16:57', 'mega3-col2'),
(172, 'mega menu 3 - col3 - product', 2, '', 1, 1, 1, 21, 20, 3, 1, 2, 0, 0, '', '3', 7, '', '<div class="mega-product">\r\n{{block type="basicproducts/list" name="basicproducts.list.mega" template="sm/basicproducts/megaproduct.phtml"\r\n basicproducts_title_text="" product_source="ids" product_ids="925" product_description_display="0" imgcfg_width="220" imgcfg_height="220" product_title_max_length="25" product_reviews_count="1" product_description_disp="0"}}\r\n</div>', '2015-01-10 04:53:58', '2015-01-10 04:53:58', 'mega3-col3'),
(173, 'Computers & Networking', 1, '', 1, 1, 1, 31, 30, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzUucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/47', '', '2014-12-17 01:37:53', '2014-12-17 01:37:53', ''),
(174, 'Laptops & Accessories', 1, '', 1, 1, 1, 33, 32, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzYucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/48', '', '2014-12-17 01:38:19', '2014-12-17 01:38:19', ''),
(175, 'Jewelry & Watches', 1, '', 1, 1, 1, 35, 34, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzcucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/46', '', '2014-12-17 01:38:41', '2014-12-17 01:38:41', ''),
(176, 'Flashlights & Lamps', 1, '', 1, 1, 1, 37, 36, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzgucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/45', '', '2014-12-17 01:39:05', '2014-12-17 01:39:05', ''),
(177, 'Bags, Shoes & Accessories', 1, '', 1, 1, 1, 27, 26, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzExLnBuZyJ9fQ,,/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/6', '', '2014-12-17 01:37:06', '2014-12-17 01:37:06', ''),
(178, 'Cameras & Photo', 1, '', 1, 1, 1, 39, 38, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzEyLnBuZyJ9fQ,,/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/40', '', '2014-12-17 01:39:23', '2014-12-17 01:39:23', ''),
(179, 'Holiday Supplies & Gifts', 1, '', 1, 1, 1, 41, 40, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzEzLnBuZyJ9fQ,,/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/52', '', '2014-12-17 01:39:40', '2014-12-17 01:39:40', ''),
(180, 'Apparel', 1, '', 1, 1, 1, 43, 42, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzE1LnBuZyJ9fQ,,/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/42', '', '2014-12-17 01:39:59', '2014-12-17 01:39:59', ''),
(181, 'Video Games', 1, '', 1, 1, 1, 45, 44, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzE2LnBuZyJ9fQ,,/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/136', '', '2014-12-17 01:40:17', '2014-12-17 01:40:17', ''),
(182, 'Electronics', 1, '', 1, 1, 1, 9, 8, 1, 1, 1, 0, 0, 'http://192.168.1.78/ytc_templates/magento/sm-market/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvbWVnYS1tZW51LzEucG5nIn19/key/23b9222432b3bd0791592cadcb327072/', '3', 4, 'category/4', '', '2014-12-17 01:34:58', '2014-12-17 01:34:58', ''),
(183, 'Home content', 2, '', 1, 1, 1, 4, 3, 2, 2, 6, 0, 0, '', '3', 7, '', '<div class="mega-home-content">\r\n	<ul>\r\n        <li><a href="{{store url="?___store=english&amp;___from_store=australia"}}">Homepage Default</a></li>\r\n        <li><a href="{{store url="?___store=hungary&___from_store=english"}}">Homepage Style 2</a></li>\r\n        <li><a href="{{store url="?___store=vietnam&amp;___from_store=english"}}">Homepage Style 3</a></li>\r\n        <li><a href="{{store url="?___store=chile&amp;___from_store=english"}}">Homepage Style 4</a></li>\r\n		\r\n		<li><a href="{{store url="?___store=afghanistan&amp;___from_store=english"}}">Homepage Style 5</a></li>\r\n		<li><a href="{{store url="?___store=guinea&amp;___from_store=english"}}">Homepage Style 6</a></li>\r\n		<li><a href="{{store url="?___store=cuba&amp;___from_store=english"}}">Homepage Style 7</a></li>\r\n		<li><a href="{{store url="?___store=andorra&amp;___from_store=english"}}">Homepage Style 8</a></li>\r\n		\r\n    	<li><a href="{{store url="?___store=french&amp;___from_store=english"}}">Boxed Layout</a></li>\r\n        <li><a href="{{store url="?___store=english&amp;___from_store=australia"}}">Yellow Color</a></li>\r\n        <li><a href="{{store url="?___store=australia&amp;___from_store=english"}}">Blue Color</a></li>\r\n        <li><a href="{{store url="?___store=canada&amp;___from_store=english"}}">Green Color</a></li>\r\n        <li><a href="{{store url="?___store=italia&amp;___from_store=english"}}">Emerald Color</a></li>\r\n        <li><a href="{{store url="?___store=german&amp;___from_store=english"}}">Tangerine Color</a></li>\r\n        <li><a href="{{store url="?___store=japan&amp;___from_store=english"}}">Right to Left Layout</a></li>\r\n    </ul>\r\n</div>', '2016-05-11 08:31:37', '2016-05-11 08:31:37', 'home-cont'),
(184, 'Page Content', 2, '', 1, 1, 1, 14, 13, 2, 2, 6, 0, 0, '', '3', 7, '', '<div class="page-content">\r\n	<div class="row">\r\n		<div class="col-lg-6 col-md-6 col-sm-6">\r\n			<ul class="page-list">\r\n				<li><a title="Pricing" href="{{store url="pricing"}}">Pricing</a></li>\r\n				<li><a title="Team" href="{{store url="team"}}">Team</a></li>\r\n				<li><a title="Categories" href="{{store url="categories-page"}}">Categories</a></li>\r\n				<li><a title="FAQ" href="{{store url="faqs"}}">FAQ</a></li>\r\n				<li><a title="Search" href="{{store url="popular-search"}}">Search</a></li>\r\n				<li><a title="Sitemap Categories" href="{{store url="site-map"}}">Sitemap Categories</a></li>\r\n			</ul>\r\n		</div>\r\n		\r\n		<div class="col-lg-6 col-md-6 col-sm-6">\r\n			<ul class="page-list">\r\n				<li><a title="Country" href="{{store url="country-support"}}">Country</a></li>\r\n				<li><a title="Testimonials" href="{{store url="testimonials"}}">Testimonials</a></li>\r\n				<li><a title="Typography" href="{{store url="typography"}}">Typography</a></li>\r\n				<li><a title="Newsletter Popup" href="{{store url="popup-newsletter"}}">Newsletter Popup</a></li>\r\n				<li><a title="Partners" href="{{store url="partners"}}">Partners</a></li>\r\n				<li><a title="Event" href="{{store url="events"}}">Event</a></li>\r\n			</ul>\r\n		</div>\r\n	</div>\r\n</div>', '2016-05-23 03:26:33', '2016-05-23 03:26:33', '');
