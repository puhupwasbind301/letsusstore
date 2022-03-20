<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


//Front
// P Starts
$route['default_controller'] = 'Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'Home/index';
$route['error-404'] = 'Home/error_404';

//WAREHOUSEING
$route['home/warehouse'] 	 	= 'Home/warehouse';
$route['home/shed'] 			= 'Home/shed';
$route['home/rcc'] 				= 'Home/rcc';
$route['home/bts'] 				= 'Home/bts';


$route['home/land'] 			= 'Home/land';
$route['home/page-pl'] 			= 'Home/page_pl';
$route['home/waste-management'] = 'Home/waste_management';
$route['home/investor'] 		= 'Home/investor';
$route['home/agent'] 			= 'Home/agent';
$route['home/supplier'] 		= 'Home/supplier
';


//MANPOWER
$route['home/manpower'] 			= 'Home/manpower';
$route['home/loaders'] 				= 'Home/loaders';
$route['home/pickers-and-packers'] 	= 'Home/pickers_and_packers';
$route['home/security'] 			= 'Home/security';
$route['home/supervisor'] 			= 'Home/supervisor';
$route['home/deo'] 					= 'Home/deo';


//MATERIAL HANDLING
$route['home/material-handling'] 	= 'Home/material_handling';
$route['home/forklift'] 			= 'Home/forklift';
$route['home/clamper'] 				= 'Home/clamper';
$route['home/hpt'] 					= 'Home/hpt';
$route['home/stackers'] 			= 'Home/stackers';

//TECHNOLOGY
$route['home/technology'] 			= 'Home/technology';
$route['home/hardware'] 			= 'Home/hardware';
$route['home/software'] 			= 'Home/software';

//DISTRIBUTION SERVICES
$route['home/distribution-services'] 	= 'Home/distribution_services';
$route['home/primary-movement'] 	= 'Home/primary_movement';
$route['home/secondary-movement'] 	= 'Home/secondary_movement';
$route['home/d2c-services'] 		= 'Home/d2c_services';



//ABOUT US
$route['home/about-us'] 			= 'Home/aboutUs';
$route['home/company-profile'] 		= 'Home/companyProfile';
$route['home/about-ceo'] 			= 'Home/aboutCEO';
$route['home/cri'] 					= 'Home/corpoateResponsibilityInitiative';
$route['home/covid-precautions'] 	= 'Home/covidPrecautions';
//STORAGE TYPES
$route['home/storage'] 				= 'Home/storage';
$route['home/private-rooms'] 		= 'Home/privateRooms';
$route['home/box-storage'] 			= 'Home/boxStorage';
$route['home/utility-locker'] 		= 'Home/utilityLocker';
$route['home/document-storage'] 		= 'Home/bikeStorage';
//BENEFITS
$route['home/benefits'] 			= 'Home/benefits';
//LOCATION
$route['home/delhi-mundka'] 		= 'Home/delhiMundka';
$route['home/gurgaon-hondachowk'] 	= 'Home/gurgaonHondachowk';
$route['home/pune-ranjangaon'] 		= 'Home/puneRanjangaon';
$route['home/chennai'] 				= 'Home/chennai';
$route['home/hyderabad'] 			= 'Home/hyderabad';
$route['home/kolkatta'] 			= 'Home/kolkatta';
$route['home/mumbai'] 				= 'Home/mumbai';
$route['home/goa'] 					= 'Home/goa';
//RESOURCE
$route['home/testimonial'] 			= 'Home/testimonial';
$route['home/blogs'] 				= 'Home/blogs';
$route['home/gallery'] 				= 'Home/gallery';
$route['home/size-guide'] 			= 'Home/sizeGuide';
$route['home/faqs'] 				= 'Home/faqs';
$route['home/terms-and-conditions'] = 'Home/termsAndConditions';
$route['home/privacy-policy'] 		= 'Home/privacyPolicy';
$route['home/news'] 				= 'Home/news';
//CONTACT
$route['home/contact-us'] 			= 'Home/contactUs';
//CONTACT
$route['home/sign-in'] 			= 'Home/sign_in';
//CONTACT
$route['home/sign-up'] 			= 'Home/sign_up';

//STORAGE CALCULATOR
$route['home/storage-calculator'] 	= 'Home/storageCalculator';
$route['home/substract-square-feet']= 'Home/substractSquareFeet';
$route['home/addition-square-feet'] = 'Home/additionSquareFeet';

$route['home/insert-user-square-feet-calculator'] = 'Home/insertUserSquareFeetCalculator';


$route['home/contact-form-submission'] = 'Home/contactFormSubmission';
// P Ends


//Admin
$route['web-admin'] = 'Admin_login/auth_admin';
$route['admin']     = 'Admin';
$route['admin/logout']   = 'Admin_login/logout';
$route['admin/set-lockscreen']  = 'Admin/set_lockscreen';
$route['admin/lockscreen']      = 'Admin_login/auth_lockscreen';
$route['admin/blank'] = 'Admin/blank';
$route['admin/setting'] = 'Admin/setting';

$route['admin/about_us'] 		= 'Admin/aboutUs';
$route['admin/about-us-view'] 		= 'Admin/aboutUsView';

$route['admin/meta-data-view'] 		= 'Admin/metaDataView';

//About us ADD
$route['admin/main-section'] 		= 'Admin/mainSection';
$route['admin/our-works'] 			= 'Admin/ourWorks';
$route['admin/meet-the-team'] 		= 'Admin/meetTheTeam';
$route['admin/news-and-articles']   = 'Admin/newsAndArticles';


//About us VIEW
$route['admin/main-section-view'] 		 = 'Admin/mainSectionView';
$route['admin/our-works-view'] 			 = 'Admin/ourWorksView';
$route['admin/meet-the-team-view'] 		 = 'Admin/meetTheTeamView';
$route['admin/news-and-articles-view']   = 'Admin/newsAndArticlesView';

//Warehouse

// $route['admin/page/(:any)'] 	= 'Admin/page/$1';
$route['admin/warehouse'] 	= 'Admin/warehouse';
$route['admin/shed'] 		= 'Admin/shed';
$route['admin/rcc'] 		= 'Admin/rcc';
$route['admin/bts'] 		= 'Admin/bts';
//About us VIEW

$route['admin/warehouse-view'] = 'Admin/warehouseView';
$route['admin/shed-view'] 		= 'Admin/shedView';
$route['admin/rcc-view'] 		= 'Admin/rccView';
$route['admin/bts-view'] 		= 'Admin/btsView';


$route['admin/land'] 						= 'Admin/land';
$route['admin/three_pl'] 						= 'Admin/three_pl';
$route['admin/waste_management'] 			= 'Admin/waste_management';

$route['admin/land-view'] 					= 'Admin/landView';
$route['admin/three-pl-view'] 					= 'Admin/threePLView';
$route['admin/waste-management-view'] 		= 'Admin/wasteManagementView';


//Manpower
$route['admin/manpower'] 				= 'Admin/manpower';
$route['admin/loaders'] 				= 'Admin/loaders';
$route['admin/pickers_and_packers'] 	= 'Admin/pickers_and_packers';
$route['admin/supervisor']		 		= 'Admin/supervisor';
$route['admin/security']		 		= 'Admin/security';
$route['admin/deo']		 				= 'Admin/deo';


//Manpower View
$route['admin/manpower-view'] 					= 'Admin/manpowerView';
$route['admin/loaders-view'] 					= 'Admin/loaderView';
$route['admin/pickers-and-packers-view'] 		= 'Admin/pickersAndPackersView';
$route['admin/supervisor-view'] 				= 'Admin/supervisorView';
$route['admin/security-view'] 					= 'Admin/securityView';
$route['admin/deo-view'] 						= 'Admin/deoView';


//Material Handing
$route['admin/material_handling'] 					= 'Admin/material_handling';
$route['admin/forklift']		 					= 'Admin/forklift';
$route['admin/clamper']		 						= 'Admin/clamper';
$route['admin/hpt']		 							= 'Admin/hpt';
$route['admin/stackers']		 					= 'Admin/stackers';

//Material Handing View
$route['admin/material-handling-view'] 				= 'Admin/materialHandlingView';
$route['admin/forklift-view'] 						= 'Admin/forkliftView';
$route['admin/clamper-view'] 						= 'Admin/clamperView';
$route['admin/hpt-view'] 							= 'Admin/hptView';
$route['admin/stackers-view'] 						= 'Admin/stackersView';


//Technology
$route['admin/technology'] 							= 'Admin/technology';
$route['admin/software']		 					= 'Admin/software';
$route['admin/hardware']		 					= 'Admin/hardware';

//Technology View
$route['admin/technology-view'] 					= 'Admin/technologyView';
$route['admin/software-view'] 						= 'Admin/softwareView';
$route['admin/hardware-view'] 						= 'Admin/hardwareView';

//Distribution
$route['admin/distribution_services'] 					= 'Admin/distribution_services';
$route['admin/primary_service'] 						= 'Admin/primary_service';
$route['admin/secondary_service']		 				= 'Admin/secondary_service';
$route['admin/d2c_services']		 					= 'Admin/d2c_services';

//Distribution View
$route['admin/distribution-services-view'] 				= 'Admin/distributionServicesView';
$route['admin/primary-service-view'] 					= 'Admin/primaryServiceView';
$route['admin/secondary-service-view'] 				    = 'Admin/secondaryServiceView';
$route['admin/d2c-services-view'] 						= 'Admin/d2cServicesView';


//Storage
$route['admin/storage'] 								= 'Admin/storage';
$route['admin/private-rooms'] 							= 'Admin/private-rooms';
$route['admin/box-storage']		 						= 'Admin/box-storage';
$route['admin/utility-locker']		 					= 'Admin/utility-locker';
$route['admin/document-storage']		 				= 'Admin/document-storage';

//Storage View
$route['admin/storage-view'] 						    = 'Admin/storageView';
$route['admin/private-rooms-view'] 						= 'Admin/privateRoomsView';
$route['admin/box-storage-view'] 						= 'Admin/boxStorageView';
$route['admin/utility-locker-view'] 					= 'Admin/utilityLockerView';
$route['admin/document-storage-view'] 					= 'Admin/documentStorageView';


//Investor
$route['admin/investor'] 								= 'Admin/investor';

//Investor View
$route['admin/investor-view'] 							= 'Admin/investorView';









//Storage Types ADD
$route['admin/private-rooms'] 		= 'Admin/privateRooms';
$route['admin/box-storage'] 		= 'Admin/boxStorage';
$route['admin/utility-locker'] 		= 'Admin/utilityLocker';
$route['admin/document-storage'] 	    = 'Admin/bikeStorage';
//Storage Types VIEW
$route['admin/private-rooms-view'] 		= 'Admin/privateRoomsView';
$route['admin/box-storage-view'] 		= 'Admin/boxStorageView';
$route['admin/utility-locker-view']		= 'Admin/utilityLockerView';
$route['admin/document-storage-view'] 	    = 'Admin/bikeStorageView';


//Benefits ADD
$route['admin/benefits'] 				= 'Admin/benefits';

//Benefits VIEW
$route['admin/benefits-view'] 			= 'Admin/benefitsView';

//Storage Types ADD
$route['admin/delhi-mundka'] 		= 'Admin/delhiMundka';
$route['admin/gurgaon-hondachowk']  = 'Admin/gurgaonHondachowk';
$route['admin/pune-ranjangaon'] 	= 'Admin/puneRanjangaon';
$route['admin/chennai'] 	    	= 'Admin/chennai';
$route['admin/hyderabad'] 			= 'Admin/hyderabad';
$route['admin/kolkatta'] 			= 'Admin/kolkatta';
$route['admin/mumbai'] 				= 'Admin/mumbai';
$route['admin/goa'] 	    		= 'Admin/goa';
//Storage Types VIEW
$route['admin/delhi-mundka-view'] 		= 'Admin/delhiMundkaView';
$route['admin/gurgaon-hondachowk-view'] = 'Admin/gurgaonHondachowkView';
$route['admin/pune-ranjangaon-view']	= 'Admin/puneRanjangaonView';
$route['admin/chennai-view'] 	    	= 'Admin/chennaiView';
$route['admin/hyderabad-view'] 			= 'Admin/hyderabadView';
$route['admin/kolkatta-view'] 			= 'Admin/kolkattaView';
$route['admin/mumbai-view']				= 'Admin/mumbaiView';
$route['admin/goa-view'] 	    		= 'Admin/goaView';
	

//Resources ADD
$route['admin/testimonial'] 		= 'Admin/testimonial';
$route['admin/blogs'] 				= 'Admin/blogs';
$route['admin/gallery'] 			= 'Admin/gallery';
$route['admin/size-guide'] 			= 'Admin/sizeGuide';
$route['admin/faqs'] 				= 'Admin/faqs';
$route['admin/terms-and-conditions']= 'Admin/termsAndConditions';
$route['admin/privacy-policy'] 		= 'Admin/privacyPolicy';
$route['admin/news'] 				= 'Admin/news';

//Resources VIEW
$route['admin/testimonial-view'] 		  = 'Admin/testimonialView';
$route['admin/blogs-view'] 		    	  = 'Admin/blogsView';
$route['admin/gallery-view'] 			  = 'Admin/galleryView';
$route['admin/size-guide-view'] 		  = 'Admin/sizeGuideView';
$route['admin/faqs-view'] 				  = 'Admin/faqsView';
$route['admin/terms-and-conditions-view'] = 'Admin/termsAndConditionsView';
$route['admin/privacy-policy-view'] 	  = 'Admin/privacyPolicyView';
$route['admin/news-view'] 		    	  = 'Admin/newsView';


//Contact ADD
$route['admin/contact-us'] 				= 'Admin/contactUs';

//Contact VIEW
$route['admin/contact-us-view'] 		= 'Admin/contactUsView';
//

//Contact VIEW
$route['admin/banner-image-view'] 		= 'Admin/bannerImageView';
//

//Contact VIEW
$route['admin/user-contact-detail'] 		= 'Admin/userContactDetail';
$route['admin/delete-user-contact-detail'] 	= 'Delete/deleteUserContactDetail';
//

//Agent View
$route['admin/agent_list']  = 'Admin/agentList';

//Investor View
$route['admin/investor_list']  = 'Admin/investorList';

//Customer Request View
$route['admin/customer_list']  = 'Admin/customerList';
$route['admin/customer_service_request_list/(:num)'] = 'Admin/customer_service_request_list/$1';
$route['admin/unautherised_customer_service_request_list'] = 'Admin/unautherised_customer_service_request_list';
$route['admin/autherised_customer_service_request_list'] = 'Admin/autherised_customer_service_request_list';

$route['admin/update_reject_request/(:num)/(:num)/(:any)'] = 'Admin/updateRejectRequest/$1/$2/$3';
$route['admin/invoice_generate/(:num)/(:num)'] = 'Admin/invoiceGenerate/$1/$2';
$route['admin/non_customer_invoice_generate/(:num)'] = 'Admin/nonCustomerInvoiceGenerate/$1';
$route['admin/request_invoice'] = 'Admin/requestInvoice';


//Supplier Product List
$route['admin/supplier_list']  = 'Admin/supplierList';
$route['admin/supplier_product_list/(:num)']  = 'Admin/supplierProductList/$1';
$route['admin/insert-supplier-product']  = 'Admin/insertSupplierProduct';
$route['admin/update-supplier-product']  = 'Admin/updateSupplierProduct';
$route['admin/delete-supplier-product']  = 'Delete/deleteSupplierProduct';


//DELETE Agent Supplier Customer Investor
$route['admin/delete-supplier']  = 'Delete/deleteSupplier';



$route['admin/add-banner-image'] 		= 'Admin/addBannerImage';
$route['admin/update-banner-image'] 	= 'Admin/updateBannerImage';
$route['admin/delete-banner-image'] 	= 'Delete/deleteBannerImage';

$route['admin/add-meta-data'] 		= 'Admin/addMetaData';
$route['admin/update-meta-data'] 	= 'Admin/updateMetaData';
$route['admin/delete-meta-data'] 	= 'Delete/deleteMetaData';


$route['admin/insert-home'] = 'Admin/insertHome';
$route['admin/update-home'] = 'Admin/updateHome';
$route['admin/delete-home'] = 'Delete/deleteHome';

// $route['admin/insert-our-works'] = 'Admin/insertOurWorks';
// $route['admin/update-our-works'] = 'Admin/updateOurWorks';
// $route['admin/delete-our-works'] = 'Delete/deleteHome';

// $route['admin/insert-meet-the-team'] = 'Admin/insertMeetTheTeam';
// $route['admin/update-meet-the-team'] = 'Admin/updateMeetTheTeam';
// $route['admin/delete-meet-the-team'] = 'Delete/deleteHome';

// $route['admin/insert-news-and-articles'] = 'Admin/insertNewsAndArticles';
// $route['admin/update-news-and-articles'] = 'Admin/updateNewsAndArticles';
// $route['admin/delete-news-and-articles'] = 'Delete/deleteHome';


// $route['admin/insert-shed'] = 'Admin/insertShed';
// $route['admin/update-shed'] = 'Admin/updateShed';
// $route['admin/delete-shed'] = 'Delete/deleteShed';

$route['admin/insert-page/(:any)'] = 'Admin/insertPage/$1';
$route['admin/update-page/(:any)'] = 'Admin/updatePage/$1';
$route['admin/delete-page/(:any)'] = 'Delete/deletePage/$1';


	
$route['admin/insert-about-ceo'] = 'Admin/insertAboutCEO';
$route['admin/update-about-ceo'] = 'Admin/updateAboutCEO';
$route['admin/delete-about-ceo'] = 'Delete/deleteAboutCEO';


$route['admin/insert-cri'] = 'Admin/insertCRI';
$route['admin/update-cri'] = 'Admin/updateCRI';
$route['admin/delete-cri'] = 'Delete/deleteCRI';

$route['admin/insert-covid-precautions'] = 'Admin/insertCovidPrecautions';
$route['admin/update-covid-precautions'] = 'Admin/updateCovidPrecautions';
$route['admin/delete-covid-precautions'] = 'Delete/deleteCovidPrecautions';



$route['admin/insert-private-rooms'] = 'Admin/insertprivateRooms';
$route['admin/update-private-rooms'] = 'Admin/updateprivateRooms';
$route['admin/delete-private-rooms'] = 'Delete/deleteprivateRooms';

$route['admin/insert-box-storage'] = 'Admin/insertboxStorage';
$route['admin/update-box-storage'] = 'Admin/updateboxStorage';
$route['admin/delete-box-storage'] = 'Delete/deleteboxStorage';

$route['admin/insert-utility-locker'] = 'Admin/insertutilityLocker';
$route['admin/update-utility-locker'] = 'Admin/updateutilityLocker';
$route['admin/delete-utility-locker'] = 'Delete/deleteutilityLocker';

$route['admin/insert-bike-storage'] = 'Admin/insertbikeStorage';
$route['admin/update-bike-storage'] = 'Admin/updatebikeStorage';
$route['admin/delete-bike-storage'] = 'Delete/deletebikeStorage';

//Benefits
$route['admin/insert-benefits'] = 'Admin/insertBenefits';
$route['admin/update-benefits'] = 'Admin/updateBenefits';
$route['admin/delete-benefits'] = 'Delete/deleteBenefits';

//Locations
$route['admin/insert-delhi-mundka'] = 'Admin/insertdelhiMundka';
$route['admin/update-delhi-mundka'] = 'Admin/updatedelhiMundka';
$route['admin/delete-delhi-mundka'] = 'Delete/deletedelhiMundka';

$route['admin/insert-gurgaon-hondachowk'] = 'Admin/insertgurgaonHondachowk';
$route['admin/update-gurgaon-hondachowk'] = 'Admin/updategurgaonHondachowk';
$route['admin/delete-gurgaon-hondachowk'] = 'Delete/deletegurgaonHondachowk';

$route['admin/insert-pune-ranjangaon'] = 'Admin/insertpuneRanjangaon';
$route['admin/update-pune-ranjangaon'] = 'Admin/updatepuneRanjangaon';
$route['admin/delete-pune-ranjangaon'] = 'Delete/deletepuneRanjangaon';

$route['admin/insert-chennai'] = 'Admin/insertChennai';
$route['admin/update-chennai'] = 'Admin/updateChennai';
$route['admin/delete-chennai'] = 'Delete/deleteChennai';

$route['admin/insert-hyderabad'] 	 = 'Admin/insertHyderabad';
$route['admin/update-hyderabad'] 	 = 'Admin/updateHyderabad';
$route['admin/delete-hyderabad'] 	 ='Delete/deleteHyderabad';
$route['admin/delete-all-hyderabad'] ='Delete/deleteAllHyderabad';


$route['admin/insert-kolkatta'] = 'Admin/insertKolkatta';
$route['admin/update-kolkatta'] = 'Admin/updateKolkatta';
$route['admin/delete-kolkatta'] ='Delete/deleteKolkatta';

$route['admin/insert-mumbai'] = 'Admin/insertMumbai';
$route['admin/update-mumbai'] = 'Admin/updateMumbai';
$route['admin/delete-mumbai'] ='Delete/deleteMumbai';

$route['admin/insert-goa'] = 'Admin/insertGoa';
$route['admin/update-goa'] = 'Admin/updateGoa';
$route['admin/delete-goa'] ='Delete/deleteGoa';


//Resource
$route['admin/insert-testimonial'] = 'Admin/insertTestimonial';
$route['admin/update-testimonial'] = 'Admin/updateTestimonial';
$route['admin/delete-testimonial'] ='Delete/deleteTestimonial';

$route['admin/insert-blogs'] = 'Admin/insertBlogs';
$route['admin/update-blogs'] = 'Admin/updateBlogs';
$route['admin/delete-blogs'] ='Delete/deleteBlogs';

$route['admin/insert-gallery'] = 'Admin/insertGallery';
$route['admin/update-gallery'] = 'Admin/updateGallery';
$route['admin/delete-gallery'] ='Delete/deleteGallery';

$route['admin/insert-size-guide-location'] 	= 'Admin/insertSizeGuideLocation';
$route['admin/insert-size-guide'] = 'Admin/insertsizeGuide';
$route['admin/update-size-guide'] = 'Admin/updatesizeGuide';
$route['admin/delete-size-guide'] ='Delete/deletesizeGuide';

$route['admin/insert-faqs'] = 'Admin/insertFaqs';
$route['admin/update-faqs'] = 'Admin/updateFaqs';
$route['admin/delete-faqs'] ='Delete/deleteFaqs';

$route['admin/insert-terms-and-conditions'] = 'Admin/insertTermsAndConditions';
$route['admin/update-terms-and-conditions'] = 'Admin/updateTermsAndConditions';
$route['admin/delete-terms-and-conditions'] ='Delete/deleteTermsAndConditions';

$route['admin/insert-privacy-policy'] = 'Admin/insertPrivacyPolicy';
$route['admin/update-privacy-policy'] = 'Admin/updatePrivacyPolicy';
$route['admin/delete-privacy-policy'] ='Delete/deletePrivacyPolicy';

$route['admin/insert-news'] = 'Admin/insertNews';
$route['admin/update-news'] = 'Admin/updateNews';
$route['admin/delete-news'] ='Delete/deleteNews';

//Contact
$route['admin/insert-contact-us'] = 'Admin/insertContactUs';
$route['admin/update-contact-us'] = 'Admin/updateContactUs';
$route['admin/delete-contact-us'] ='Delete/deleteContactUs';

//Storage Calculator
$route['admin/storage-calculator'] 			= 'Admin/storageCalculator';
$route['admin/insert-storage-category'] 	= 'Admin/insertStorageCategory';
$route['admin/insert-storage-calculator'] 	= 'Admin/insertStorageCalculator';
$route['admin/storage-calculator-view'] 	= 'Admin/storageCalculatorView';
$route['admin/update-storage-calculator'] 	= 'Admin/updateStorageCalculator';
$route['admin/delete-storage-calculator'] 	= 'Delete/deleteStorageCalculator';

$route['admin/update-category'] 			= 'Admin/updateCategory';
$route['admin/update-storage-calculator-category'] = 'Admin/updateStorageCalculatorCategory';
$route['admin/delete-storage-calculator_category'] = 'Delete/deleteStorageCalculatorCategory';

$route['admin/user-square-feet'] 			= 'Admin/userSquareFeet';
$route['admin/delete-user-square-feet'] 	= 'Delete/deleteUserSquareFeet';

//Login Vendor
$route['login/auth_vendor/(:any)'] = 'Login/auth_vendor/$1';
$route['login/forgot_password'] = 'Login/forgot_password';
$route['login/change_password'] = 'Login/change_password';
$route['login/logout'] 			   = 'Login/logout';
$route['supplier']				   = 'Supplier/index';
$route['agent'] 				   = 'Agent/index';
$route['customer'] 				   = 'Customer/index';


//CUSTOMER PANEL
// View
$route['customer/customer_service_request'] = 'Customer/customer_service_request';
$route['customer/customer_service_request_list'] = 'Customer/customer_service_request_list';

// Insert
$route['customer/insert_customer_service_request'] = 'Customer/insertCustomerServiceRequest';
$route['common/insert_customer_service_request'] = 'Common/insertCustomerServiceRequest';
$route['customer/delete_requests'] = 'Delete/deleteServiceRequest';


$route['customer/request_invoice'] = 'Customer/requestInvoice';
$route['customer/invoice/(:num)/(:num)/(:any)']  = 'Customer/invoice/$1/$2/$3';
$route['customer/delete-invoice'] = 'Delete/deleteInvoice';
$route['customer/delete-all-invoice'] = 'Delete/deleteAllInvoice';

// SUPPLIER PANEL
// view
$route['supplier/supplier_add_product']  = 'Supplier/supplierAddProduct';
$route['supplier/supplier_product_list']  = 'Supplier/supplierProductList';
// insert
$route['supplier/insert-supplier-product']  = 'Supplier/insertSupplierProduct';
$route['supplier/update-supplier-product']  = 'Supplier/updateSupplierProduct';
$route['supplier/delete-supplier-product']  = 'Delete/deleteSupplierProduct';
















// puhupwas ends
// $route['default_controller'] = 'Admin_login/auth_admin';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;
// $route['index'] = 'Home/index';
// $route['error-404'] = 'Home/error_404';

// P Ends
