<?php
defined('BASEPATH') OR exit('No direct script access allowed');





$route=array(
    'default_controller'=>'Dashboard/index',


    /* Template Route */
    'template'=>'Template/index',
    'template/get'=>'Template/get_template',
    'template/add'=>'Template/add_template',
    'template/delete'=>'Template/delete_template',
    'template/update'=>'Template/update_template',

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
);
