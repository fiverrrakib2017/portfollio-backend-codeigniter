<?php
defined('BASEPATH') OR exit('No direct script access allowed');





$route=array(
    'default_controller' => 'FrontendController/index',

    'admin'=>'Dashboard/index',

    /* Template Route */
    'template'=>'Template/index',
    'template/get'=>'Template/get_template',
    'template/add'=>'Template/add_template',
    'template/approve'=>'Template/approve',

    /* Home Route */
    'home'=>'homeController/index',
    'home/add'=>'homeController/add_home',
    'home/get'=>'homeController/get_home', 
    'home/delete'=>'homeController/delete_home',
    'home/update'=>'homeController/update_home',


    /* Service Route */
    'service'=>'serviceController/index',
    'service/delete'=>'serviceController/delete_service',
    'service/add'=>'serviceController/add_service',
    'service/get'=>'serviceController/get_service',
    'service/update'=>'serviceController/update_service',
    


     /* About Route */
    'about'=>'aboutController/index',
    'about/add'=>'aboutController/add_about',
    'about/get'=>'aboutController/get_about',
    'about/delete'=>'aboutController/delete_about',
    'about/update'=>'aboutController/update_about', 

     /* Section One Route */
    'about/section/one'=>'About/Section/section_one_controller/index',
    'about/section/one/add'=>'About/Section/section_one_controller/add_data',
    'about/section/one/update'=>'About/Section/section_one_controller/update_data',
    'about/section/one/get'=>'About/Section/section_one_controller/get_data',
    'about/section/one/delete'=>'About/Section/section_one_controller/delete_data',
    

     /* Section Two Route */
    'about/section/two'=>'About/Section/section_two_controller/index',
    'about/section/two/update'=>'About/Section/section_two_controller/update_data',
    

     /* Section Three Route */
     'about/section/three'=>'About/Section/section_three_controller/index',
     'about/section/three/add'=>'About/Section/section_three_controller/add_data',
     'about/section/three/update'=>'About/Section/section_three_controller/update_data',
     'about/section/three/get'=>'About/Section/section_three_controller/get_data',
     'about/section/three/delete'=>'About/Section/section_three_controller/delete_data',

    /* Blog Route */
    'blog'=>'blogController/index',
    'blog/get'=>'blogController/blog_get',
    'blog/add'=>'blogController/add_blog',
    'blog/update'=>'blogController/update_blog',
    'blog/delete'=>'blogController/delete_data',



     /* Blog Comment  Route */
    'blog/comment'=>'blog_commentController/index',
    'blog/comment/approve'=>'blog_commentController/approve_comment',


    /* Contract  Route */
     'contract'=>'contractController/index',
     'contract/delete'=>'contractController/delete_data',
     'contract/add'=>'contractController/add_contract',
     'contract/get'=>'contractController/get_contract',
     'contract/update'=>'contractController/update_contract',

     /*Educational  Route */
     'education'=>'educationController/index',
     'education/add'=>'educationController/add_education',
     'education/delete'=>'educationController/delete_education',
     'education/get'=>'educationController/get_education',
     'education/update'=>'educationController/update_education',


    /*Experience  Route */
    'experience'=>'experienceController/index',
    'experience/delete'=>'experienceController/delete_experience',
    'experience/add'=>'experienceController/add_experience',
    'experience/update'=>'experienceController/update_experience',
    'experience/get'=>'experienceController/get_experience',

    /*Category  Route */
    'category'=>'categoryController/index',
    'category/add'=>'categoryController/add_category',
    'category/delete'=>'categoryController/delete_category',
    'category/get'=>'categoryController/get_category',
    'category/update'=>'categoryController/update_category',

    /*recent work  Route */
    'work'=>'workController/index',
    'work/add'=>'workController/add_work',
    'work/delete'=>'workController/delete_work',
    'work/get'=>'workController/get_work',
    'work/update'=>'workController/update_work',


    /* Design Skill  Route */
    'design/skill'=>'designController/index',
    'design/skill/add'=>'designController/add_design_skill',
    'design/skill/delete'=>'designController/delete_data',
    'design/skill/get'=>'designController/get_data',
    'design/skill/update'=>'designController/update_data',

    /* Language  Route */
    'language'=>'languageController/index',
    'language/add'=>'languageController/add_language',
    'language/update'=>'languageController/update_data',
    'language/get'=>'languageController/get_data',
    'language/delete'=>'languageController/delete_data',

    /* Testimonial  Route */
    'testimonial'=>'testimonialController/index',
    'testimonial/add'=>'testimonialController/add_testimonial',
    'testimonial/get'=>'testimonialController/get_testimonial',
    'testimonial/update'=>'testimonialController/update_testimonial',
    'testimonial/delete'=>'testimonialController/delete_data',

    /* Message  Route */ 
    'message'=>'messageController/index',
    'message/delete'=>'messageController/delete_message',
    'message/add'=>'messageController/add_message',




     /* Site Setting  Route */ 
     'setting/social'=>'siteController/index',
     'setting/social/update'=>'siteController/update_data',
     'setting/social/delete'=>'siteController/delete_data',
     'setting/social/get'=>'siteController/get_data',
     'setting/social/add'=>'siteController/add_data',

     /* Site Setting Profile  Route */ 
     'setting/profile'=>'profileController/index',
     'setting/profile/add'=>'profileController/update_profile',
);
