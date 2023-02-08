<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:62:"https://virtuemart.net/news/509-virtuemart-4-0-12-release-news";s:5:"title";s:30:"VirtueMart 4.0.12 Release News";s:11:"description";s:5792:"<h3><img src="https://virtuemart.net/images/Panorama_Holzer_Kreuz_004.jpg" alt="Panorama Holzer Kreuz 004" width="690" height="107" style="display: block; margin-left: auto; margin-right: auto;" />Improved compatibility with Joomla 4.2 and PHP 8.1 plus category tree loading speeded up by factor 10</h3>
<p style="text-align: justify;">This version took longer than expected, as the team faced several compatibility issues this time. Joomla 4.2 caused more problems than Joomla 4.0 did back then. Suddenly, the 'add to cart' function didn't work anymore, opening shipping/payment methods caused a loop, saving with timestamp failed and so on.<br /><br />In addition, the changes and removed functions/methods/modes in PHP 8.1 caused further trouble. For example, this caused searches with special characters to not work. <br />When we were about ready, a customer with more than 8000 categories (in 5 levels) tested the new version with a terrible result. A lot of tweaking was done on the category tree loading process with an improved cache. The idea of the new cache was to store the cached array instead of a rendered result, so the cache is used by almost every function to list categories. It was super fast with the cache created, but building the cache took 29 seconds for 8000 categories.<br /><br /> I took a closer look, and the reason for the error was simple: The cache saved the result every time there was a new result. The solution was to save it only once at the end. That helped a lot, but it still took 8 seconds to build the cache. I told the customer that there was another idea to make it faster, and he agreed to buy a membership to finance testing this idea. The new idea loads the entire table at once and does the tree sorting directly in php. The new result is phenomenal, loading the category tree via ajax now takes only 800ms without cache for the 8000+ categories. With cache it is about 650ms. Of course this is all measured on my computer, and of course the result is a bit different each time. But in more than 10 tests it was between 780-830ms. On the customer's real live server it is even a bit faster.</p>
<p style="text-align: justify;">After the release is before the release. There is still a lot to do for a seamless integration of VirtueMart into Joomla 4, because there is still a lot of change in the Joomla 4 development. From my humble point of view, Joomla 4.0 was not really stable when we look at the problems we got with Joomla 4.2. But the real problem pressure comes from the compatibility issues with PHP8. So our current focus is still on a stable Joomla 3.10.x with PHP 8.</p>
<p>and it happened again, that the release was ready. But the new compatibility fixes needed compatibilty fixes ;-)</p>
<h4>New Options:</h4>
<ul>
<li>New option BrowseProductCartattributeOnly. This can enhance the speed browsing products</li>
<li>Cart; added hidden configs enableCartMerging and enableCartLoad (by stAn)</li>
</ul>
<h4>Improvements FOR users</h4>
<ul>
<li>Customfields, translation are shown in the BE</li>
<li>Free shipment is calculated without shipment cost</li>
<li>Fix for edting order items (by Quorvia)</li>
<li>J4 fixed popup of related products/categories</li>
<li>added missing empty option to customlist, customlist shows now by default only published customfieldsadded missing empty option to customlist, customlist shows now by default only published customfields</li>
<li>customfield dropdown in product edit reacts adding the same customfield the second time</li>
</ul>
<h4>Improvements/Fixes under the hood</h4>
<ul>
<li>Added extra checks, so that unbrowseable discontinued products cannot be added to the cart or get removed</li>
<li>GetNeighborProducts enhanced it by parsing for more than one orderby correctly. It is better, but still not perfect. Perfect works only with temporarly lists.</li>
<li>Removed mf_name from product search</li>
<li>Important enhancement for router cache. The cache for the routing is now stored within the maincontroller after everything is executed, to ensure just one call</li>
<li>Enhanced cache in category.php</li>
<li>Added program cache to getParentsList</li>
<li>Fixed wrong limit in getCategoryTree</li>
<li>Calls for category tree without media now.</li>
<li>Fixed fallback for second language</li>
<li>0.0 prices are no longer inherited</li>
<li>Fixes in router for the manufacturer views</li>
</ul>
<h4>Compatibility</h4>
<ul>
<li>Added mb_decode_mimeheader to subject of mails</li>
<li>added check if function exists for mb_decode_mimeheader</li>
<li>Added setConvertInt analogue to setConvertDecimal to define the variables which must be converted to integer (mysql strict mode) and added some of them (for example userinfo)</li>
<li>Replaced some overlooked query() against execute()</li>
<li>Enhanced deletion of cookie, added check if function exists</li>
</ul>
<h4>Developers:</h4>
<ul>
<li>Use for filtering of strings vmSpecialChars and vmSpecialChars_decode.</li>
<li>Use for tables setLockable if applicable</li>
<li>Added vRequest::setRouterVars(); to main controllers</li>
<li>Enhanced vRequest, can now filter given array</li>
<li>Removed default for text to avoid compatibility problems with some dbs</li>
<li>Enhanced the currency object, can now be created with custom exchange rate</li>
<li>Enhanced vmecho, works now with variables of class vmecho (works standalone)</li>
<li>Added lastAddedProduct to the cart object</li>
<li>Added hidden configs for CLI; for max_execution_time use givenMaxTime and memory_limit givenMaxRam</li>
<li>Added getInt and getFloat to vmConfig</li>
<li>updated jQuery.UI min to 1.13.2</li>
</ul>
<p style="text-align: center;"><a href="https://virtuemart.net/download" class="button-primary">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}i:1;O:8:"stdClass":3:{s:4:"link";s:59:"https://virtuemart.net/news/508-paybox-with-new-3dsecure-v2";s:5:"title";s:51:"Paybox with new 3DSecure V2 and 4.0.6 release notes";s:11:"description";s:2613:"<p>The Paybox payment system of Verifone is extending more international. It has very interesting payment concepts. They support already more than 50.000 shops and do more than 140 Million transactions per year.</p>
<p>Equip your e-commerce site with a secure and recognised payment solution!<br />From a basic need to a more complex processing, Verifone secures your e-commerce flows by giving you access to over 30 payment methods.</p>
<p>15 years of experience with a wide range of customers<br />Paybox accompanies you in your daily life with a secure, modular and turnkey payment solution that meets all your needs.</p>
<p>With each transaction, you benefit from the advantages of a cross-channel, multi-bank, multi-payment means, multi-currency platform equipped with fraud management and reporting tools to facilitate the daily management of your business.</p>
<p>&nbsp;</p>
<h3>6&nbsp;good reasons to choose Paybox</h3>
<table>
<tbody>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">For you ...</td>
<td style="width: 300px; padding-left: 10px;">For your customers...</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">Your bank account is credited every night.<br />Paybox does not collect your transactions</td>
<td style="width: 300px; padding-left: 10px;">Pay with the payment method they prefer</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">A choice of payment methods appropriate to your<br />your business and your customers</td>
<td style="width: 300px; padding-left: 10px;">Convenient debit at the time of shipment, in installments, by subscription or in 1 click</td>
</tr>
<tr>
<td style="width: 350px; border-right: solid; border-width: 2px; height: 60px;">A flexibility of collections, reporting, refunds<br />refunds to satisfy your customers and build loyalty</td>
<td style="width: 300px; padding-left: 10px;">Quick refund in case of return on<br />the payment method used</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Paybox is already integrated in our AIO installer, just update your installation, or use our full package to install Paybox with VirtueMart and Joomla!</p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>
<h4>4.0.6 release notes</h4>
<p>This release is for two critical bugs. The security feature for orderUpdate was too secure and blocked updating orders of guests. The other problem was in vRequest which uses the data of the router better now.</p>";}i:2;O:8:"stdClass":3:{s:4:"link";s:52:"https://virtuemart.net/news/507-bugfix-release-4-0-4";s:5:"title";s:20:"Bugfix release 4.0.4";s:11:"description";s:3338:"<p><img src="https://virtuemart.net/images/croatiaMaxMilbers.jpg" alt="croatiaMaxMilbers" /></p>
<p style="text-align: justify;"><small>croatian coast, Copyright Max Milbers</small></p>
<p>VirtueMart 4.0.4 contains various bug fixes and improvements. Especially it solves some problems reported to us after the release of the previous version of VirtueMart when it is used along with Joomla 4.1.x.<br />Fixes and changes and enhancements included in this version are:</p>
<h4>Joomla 4</h4>
<ul>
<li>Fixed saving the sorting of items in j4</li>
<li>Fixed chosen update for j4, needs another trigger</li>
<li>New jQuery for j3 (j4 one)</li>
<li>Updated xmls so they should work for j3 and j4</li>
<li>Added a missing j4 adjustment to the vmloaderpluginupdate plugin</li>
</ul>
<h4>Developer new technics</h4>
<ul>
<li>vmJsApi new method to push JHtml execution in a queque like we do with our js already. The queque is executed with writeJS</li>
<li>sku, gtin, mpn only shown for is_input customs</li>
<li>updateStatusForOneOrder is only executed if there is a given virtuemart_order_id and if the entry already exists</li>
<li>vmplugin function storePluginInternalData converts the decimals, too</li>
<li>Updated state published in the product model, for listing we now use list.published and some other minors in product model</li>
</ul>
<h4>Templater</h4>
<ul>
<li>New classes for Multivariant dropdowns</li>
<li>Horme3 removed $app-&gt;isAdmin</li>
<li>Just some better use of existing functions "loadPopUpLib"</li>
</ul>
<h4>Fixes</h4>
<ul>
<li>Enhanced router using static functions and values (all static) and remanaged it for better debugging</li>
<li>Fixed initialisation of language in router, if language was not loaded the first time with loadConfig</li>
<li>The debug of the router was sometimes called without loading the config and failed</li>
<li>Changed key field_type_searchable_published from unique to key and minors</li>
<li>GUI, changed maximum input for order status</li>
<li>Replaced all %1s and %1d to %1$s and %1$d in EN and DE language files due %1s and %1d causing problems</li>
<li>Found big error which lead to wrong inserts/updates, if the same entry was stored within the same call again.</li>
<li>Fix for vmView, added parameter for construct and added setting of VmView::$bs in getVmSubLayoutPath</li>
<li>Replaced deprecated FILTER_SANITIZE_STRING against FILTER_SANITIZE_FULL_SPECIAL_CHARS</li>
</ul>
<h4>Enhancements</h4>
<ul>
<li>Added a new option in vmloaderpluginupdate to load config with or without language</li>
<li>Categories do not load anylonger the parents for the breadcrumbs in the Backend for faster listing</li>
<li>Some work on the languages. If a language is selected, which exists in joomla but not in the vm config, it should show the joomla language and only the vm content stored in tables like product description should use the fallback.</li>
<li>JPEG images create thumbs with JPG</li>
<li>Enhanced handling of storing a new custom proto type if type is plugin but no plugin set</li>
<li>Enhanced vmecho for better measuring time. It sums up the time needed for a particular function, but not the time between calls to the function</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}i:3;O:8:"stdClass":3:{s:4:"link";s:44:"https://virtuemart.net/news/506-virtuemart-4";s:5:"title";s:12:"VirtueMart 4";s:11:"description";s:8194:"<p style="text-align: justify;">We are pleased to release a new VirtueMart generation, which adds compatibility with Joomla 4 and PHP8. VirtueMart 4 comes with a new overridable Bootstrap 3 frontend template (Bootstrap 5 will follow soon) and new backend template. Of course there are also new features for the product presentation, a lot of bugfixes and some new programming techniques. We originally had planned to release this on Christmas, but it was not possible to keep the date due to many changes applied to joomla 4 after it's initial release. We still have to iron out a few minor complications with it, but it already works for a number of early adopters..</p>
<p><img src="https://virtuemart.net/images/vm4_newshead6_blur_small.jpg" alt="" width="690" /></p>
<h4 style="text-align: justify;">The Backend Template</h4>
<p style="text-align: justify;">The new backend template uses VMUI-Kit. Unluckily this is not ideal for Joomla 4, but BS5 will be added soon. You can choose between four different color styles and it works well on mobiles. Updaters must install it manually, because it is handled as an installable template and is not part of the VirtueMart core installation package.</p>
<h4 style="text-align: justify;">New backend features and tools</h4>
<p style="text-align: justify;">VirtueMart 4 not only has a new look, but also new functions in the backend. For example, Multivariants with children can now be autogenerated with permutating variants. Customfields can have their own SKU, GTIN, MPN. The order status was previously limited to a single character and is now extended to 3 chars. The category dropdown in the "product.edit" view now also lists unpublished categories. Original language flags (as we have already for other edits) now added to the payment and shipment edit views. RuposTel donated a google like search for products and orders. So for example use sku:mySkuToSearch to let VM search only within the SKUs.</p>
<p style="text-align: justify;">Also there are two new maintenance tools. The first one is a synchronizer consisting of three buttons, which sets country 2, country 3 and country numerical code in the country list correctly according to ISO 3166. The second one is a converter button for changing old utf8mb3 tables to utf8mb4 tables.</p>
<h4 style="text-align: justify;">New frontend template</h4>
<p style="text-align: justify;">Spyros Petrakis has generously donated his Horme3 template for the VirtueMart Core. Another new feature which you will find most useful is the the setting for different Bootstrap layouts, which was not fully implemented yet and therefore useless, ...until now! Selecting the Bootstrap 3 layouts in the configuration will load these layouts from the core. So we can now use any Bootstrap 3 template without overrides, because VirtueMart 4 loads the Horme3 ones. This also gives new users the possibility to use old override techniques. We are planning to extend this technique to modules and css. Work is already in progress to provide the same technique for Bootstrap 5.</p>
<p style="text-align: justify;">The javascript also received a general overhaul, so it is more reliable, should work better on different browsers and is easier to handle for templaters (working relative or with classes instead of ids). The new fancybox 1.3.4.2 is working with the new jQuery version now.</p>
<h4 style="text-align: justify;">Paybox</h4>
<p style="text-align: justify;">The payment plugin Paybox got a general overhaul and works now with 3Dsecure V2</p>
<h4 style="text-align: justify;">Product Bundles</h4>
<p style="text-align: justify;">are a very mighty new feature. It can be used as typical bundle of different products for one price. This was also possible before by just creating a product which listed the included products. But this method required a lot maintenance. The inventory just listed a sold bundle, but did not update the inventory per product. If you sold a bundled product also as a bulk-version, then the system used two different products. If you updated the price of the bulk version, nothing changed on the bundles version. Not any longer! The new product bundles make real bundles of different existing VirtueMart products. They can be included for free or also as variants with an extra price. The prices can be a fixed amount or a percentage. So it can also be used for cross-selling and discounts.</p>
<h4 style="text-align: justify;">Extra related product groups</h4>
<p style="text-align: justify;">are also used for cross-selling or presentation of complementary items. They are basically the same as the default related products, but can have another title and appear somewhere on product details page.</p>
<h4 style="text-align: justify;">Better search with tags</h4>
<p style="text-align: justify;">Enhanced search using the customfield searchable tag system. Searching for more than 1 tag now displays only products fitting to any requested tag..</p>
<h4 style="text-align: justify;">Keep cart content for guests</h4>
<p style="text-align: justify;">Added storing of carts for unregistered users as a cookie. This works only for SSL secured pages.</p>
<h4 style="text-align: justify;">and more</h4>
<ul>
<li style="text-align: justify;">really a lot work on caches (internal, external), table indexes and other optimisations.</li>
<li style="text-align: justify;">additionally general work to please the JED Checker.</li>
<li style="text-align: justify;">option to display thumbnails to select children of multivariants.</li>
<li style="text-align: justify;">different email layouts by order status to enhance the customer communication.</li>
<li style="text-align: justify;">you can create a category menu item which clears the cart by category.</li>
</ul>
<h3>Changes for developers</h3>
<p>ATTENTION: Triggers are case sensitive in joomla 4! <br />Changed triggers:</p>
<ul>
<li>plgVmOnStoreProduct($data, $plugin_param) changed to function plgVmOnStoreProduct($data, $plugin_param, $key)</li>
<li>plgVmonSelectedCalculatePrice to plgVmOnSelectedCalculatePrice (lower to upper case)</li>
<li>in calculation plgVmOnDisplayEdit to plgVmOnDisplayEditCalc</li>
</ul>
<p>new triggers</p>
<ul>
<li>product and order model, added new trigger plgVmMySortSearchListProductsQuery respectivly plgVmMySortSearchListOrdersQuery in exeSortSearchListQuery which is at begin and can takeover the whole function (for searchplugins)</li>
</ul>
<p>Plugin Handler</p>
<ul>
<li>Added vdispatcher.php as proxy for the joomla dispatcher</li>
<li>We can use now $results = vDispatcher::trigger('event', array(param1, param2,...));</li>
<li>the directTrigger can now execute a certain event of a plugin family, too.</li>
<li>added function reloadPlugins, which loads again the payment/shipment methods of the plugins. The cart unloads them, if they do not fit, 3rd party developer can reload them, that way.</li>
</ul>
<p>Technics</p>
<ul>
<li>setConvertDecimal for plugins, tables</li>
<li>set datefields for tables</li>
<li>$this-&gt;_genericVendorId = false prevents that the tables sets the virtuemart_vendor_id generically</li>
<li>added extra parameter to vmuploader so that it works also with other input names</li>
<li>the product model sortSearchListQuery is now working with an extra parameter, which can override an "Request" variables. So using old vRequests parameters is just used as fallback now.</li>
<li>function getProductListing is now using request params only for the group "products", not for the other groups like featured, recent, topten, and so on</li>
<li>vmecho again a bit enhanced, if debug is activated vmInfo are quequed as vmdebug (so the messages appear in the real order)</li>
<li>field products, added a category filter</li>
<li>changed ajax js for dynamic page reload, a ready script in the layout is not needed anylonger</li>
<li>added cart functions getCartWeight and getCartQuantity</li>
<li>removed the problem that a delivery note created an invoiceNumber</li>
<li>Time of the calculationHelper considers offset</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VirtueMart 4 <br /> NOW</a></p>";}i:4;O:8:"stdClass":3:{s:4:"link";s:57:"https://virtuemart.net/news/505-virtuemart-4-for-joomla-4";s:5:"title";s:25:"VirtueMart 4 for Joomla 4";s:11:"description";s:2368:"<p style="text-align: justify;">We know you are all expecting VirtueMart 4 for Joomla 4 to be released soon. We are almost there. Our new version is being tested daily in various test environments and most features are working to our satisfaction. So well, in fact, that the first VM testers are planning to go live with smaller stores soon.</p>
<h2 style="text-align: justify;">VirtueMart 4 Update Procedure</h2>
<p style="text-align: justify;">Upgrade or Migration? Don't worry, the changes in Joomla 4 are substantial in some areas, but we have made sure that you can update from VirtueMart 3 to VirtueMart 4 like a normal update, mostly with just a click of a button. We can provide you with an installation package that is compatible with Joomla 3 and Joomla 4.</p>
<h2 style="text-align: justify;">VirtueMart 4 loves Testers</h2>
<nav>
<p style="text-align: justify;">Due to the extensive changes we still have some work remaining and would be happy if you test our current RC versions for Joomla 3 and Joomla 4, which you can find at <a class="btn" href="https://dev.virtuemart.net/projects/virtuemart/files">dev.virtuemart.net</a></p>
</nav>
<p style="text-align: justify;"><img src="https://virtuemart.net/images/Panorama-Lilienstein-von-Waitsdorf.jpg" alt="Panorama Lilienstein von Waitsdorf" /></p>
<p style="text-align: justify;"><small>Saxonian Swizz Lilienstein, Copyright Max Milbers</small></p>
<h2 style="text-align: justify;">Next Release</h2>
<p style="text-align: justify;">We will soon provide a new version, even if it is not yet fully perfected for Joomla 4, as we have also made many enhancements for existing VirtueMart stores with Joomla 3.</p>
<h2 style="text-align: justify;">When to Update?</h2>
<p style="text-align: justify;">Joomla 3.10 is officially supported until August 17, 2023. So there is no need to rush to update to Joomla 4 immediately. Joomla 4 is still a new software, so we recommend to wait a bit with live store updates until the community has fully tested Joomla 4. New software always tends to have some bugs that need to be discovered and ironed out in the beginning.</p>
<p style="text-align: justify;">Help Joomla 4 and VirtueMart 4 by testing in your test environments.</p>
<p style="text-align: justify;">We expect that late spring 2022 will be a good time to update the first live stores without any problems.</p>";}}s:6:"output";s:0:"";}