<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\City;
use App\Models\Post;
use App\Models\User;
use App\Enums\JobType;
use App\Enums\Contract;
use App\Enums\Functions;
use App\Enums\Industries;
use App\Enums\EducationLevel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = City::cities();
        $operators = User::where('role_id', 3)->get();
        $operatorIds = [];
        foreach ($operators as $operator) {
            $operatorIds[] = $operator->id;
        }
        $freelancers = User::where(['role_id' => 2, 'talent_type' => 'freelancer'])->get();
        $freelancerIds = [];
        foreach ($freelancers as $freelancer) {
            $freelancerIds[] = $freelancer->id;
        }
        $contractors = User::where(['role_id' => 2, 'talent_type' => 'contractor'])->get();
        $contractorIds = [];
        foreach ($contractors as $contractor) {
            $contractorIds[] = $contractor->id;
        }
        $users = User::where('role_id', 4)->get();
        $userIds = [];
        foreach ($users as $user) {
            $userIds[] = $user->id;
        }
        $contracts = [
            'Internship',
            'CDD',
            'CDI',
        ];
        $jobTypes = [
            'Part Time',
            'Full Time',
            'Freelance',
            'Remote',
            'Hybrid',
            'On site',
        ];
        $studyLevels = [
            'Not important',
            'Baccalaurate',
            'Bac+2',
            'Bac+3',
            'Bac+4',
            'Bac+5',
        ];
        $datas = [
            [
                'post_type' => 'job request',
                'title' => 'Senior Software Engineer Position',
                'description' => 'We are looking for an experienced software engineer to join our team...',
                'industry' => Industries::INDUSTRY_ENGINEERING_ENERGY,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Data Analyst Position',
                'description' => 'Looking for a skilled data analyst to analyze and interpret complex datasets...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Marketing Manager Position',
                'description' => 'We are hiring a marketing manager to lead our marketing campaigns and strategies...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Front-end Developer Position',
                'description' => 'We are seeking a talented front-end developer to create responsive web interfaces...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'HR Manager Position',
                'description' => 'Join our HR team and contribute to talent acquisition and management...',
                'industry' => Industries::HUMAN_RESOURCES_RECRUITMENT_TEMPORARY_WORK,
                'function' => Functions::HR_PERSONNEL_TRAINING,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Experienced Housekeeper Seeking Employment',
                'description' => 'Experienced housekeeper with attention to detail seeking a full-time position in residential cleaning. Skilled in cleaning techniques, organization, and time management.',
                'industry' => Industries::PERSONAL_SERVICES,
                'function' => Functions::COOK_SERVER_CLEANER_NANNY,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Professional Chef Looking for Cooking Opportunities',
                'description' => 'Certified professional chef with culinary expertise seeking opportunities in restaurants, catering services, or private households. Skilled in a variety of cuisines.',
                'industry' => Industries::TOURISM_HOSPITALITY_RESTAURANTS,
                'function' => Functions::COOK_SERVER_CLEANER_NANNY,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Experienced Dog Trainer Seeking Employment',
                'description' => 'Experienced dog trainer with a passion for animal behavior seeking a position in dog training facilities, pet care centers, or veterinary clinics. Certified in positive reinforcement training methods.',
                'industry' => Industries::OTHER,
                'function' => Functions::COACH,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Qualified Electrician Looking for Work',
                'description' => 'Qualified electrician with knowledge of electrical systems seeking employment in residential or commercial settings. Experienced in installations, repairs, and maintenance.',
                'industry' => Industries::INDUSTRY_ENGINEERING_ENERGY,
                'function' => Functions::ENGINEERING_ELECTRO_AUTOMATION,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],            
            [
                'post_type' => 'job offer',
                'title' => 'Software Developer Position',
                'description' => 'We have an exciting opportunity for a software developer to join our innovative team...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Marketing Specialist Position',
                'description' => 'Looking for a marketing specialist with experience in SEO and content marketing...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'UX Designer Position',
                'description' => 'Join our design team and create user-friendly interfaces for our products...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'IT Support Specialist Position',
                'description' => 'We are hiring an IT support specialist to provide technical assistance to our team...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Project Manager Position',
                'description' => 'We are looking for an experienced project manager to oversee our IT projects...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Construction Worker Needed',
                'description' => 'Hiring skilled construction workers for residential building projects. Experience in carpentry, masonry, or general labor required. Full-time positions available.',
                'industry' => Industries::CONSTRUCTION_BTP,
                'function' => Functions::PRODUCTION_OPERATOR_LABORER,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Customer Service Representative Position',
                'description' => 'Join our team as a customer service representative. Responsibilities include assisting customers, handling inquiries, and maintaining customer satisfaction.',
                'industry' => Industries::BUSINESS_SERVICES_TRAINING,
                'function' => Functions::CUSTOMER_SERVICE_HOTLINE_CALL_CENTER,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Nanny/Babysitter Position Available',
                'description' => 'Seeking a caring and responsible nanny/babysitter to care for children in a private home. Must have childcare experience and excellent references.',
                'industry' => Industries::PERSONAL_SERVICES,
                'function' => Functions::COOK_SERVER_CLEANER_NANNY,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Fitness Instructor Job Opening',
                'description' => 'Exciting opportunity for a certified fitness instructor to lead group fitness classes and provide personal training sessions. Passion for fitness and motivation required.',
                'industry' => Industries::FITNESS_COACH_SPORTS_CLUB,
                'function' => Functions::COACH,
                'location' => $cities[array_rand($cities)],
                'contract' => $contracts[array_rand($contracts)], 
                'job_type' => $jobTypes[array_rand($jobTypes)], 
                'study_level' => $studyLevels[array_rand($studyLevels)],
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],            
            [
                'post_type' => 'service request',
                'title' => 'Graphic Design Services Needed',
                'description' => 'Looking for a graphic designer to create marketing materials for our brand...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => 199.9,
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'SEO Services Needed',
                'description' => 'Seeking an SEO expert to optimize our website and improve search rankings...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 350,
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Social Media Management Services Needed',
                'description' => 'Looking for a social media manager to handle our social media channels...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Content Writing Services Needed',
                'description' => 'Seeking a content writer to create engaging and informative content for our blog...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Translation Services Needed',
                'description' => 'Looking for a professional translator to translate documents from English to French...',
                'industry' => Industries::BUSINESS_IMPORT_EXPORT,
                'function' => Functions::IMPORT_EXPORT,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 79.99,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Looking for Catering Services for Event',
                'description' => 'In search of a catering service to provide food and beverages for a corporate event. Must offer a variety of menu options and accommodate dietary restrictions.',
                'industry' => Industries::TOURISM_HOSPITALITY_RESTAURANTS,
                'function' => Functions::RESTAURANT_MANAGER,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => 89.99,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Interior Design Services Needed',
                'description' => 'Seeking an interior designer to create a functional and aesthetically pleasing space for a residential renovation project. Experience with modern design preferred.',
                'industry' => Industries::REAL_ESTATE,
                'function' => Functions::BUILDING_STUDIES_ARCHITECTURE,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Tutoring Services for High School Math',
                'description' => 'Looking for a qualified tutor to help a high school student with math subjects including algebra, geometry, and calculus. Prefer someone with teaching experience.',
                'industry' => Industries::EDUCATION_SOCIAL_CHILDHOOD,
                'function' => Functions::COACH,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => 100,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Event Planning Assistance Required',
                'description' => 'Need help with event planning for a wedding ceremony. Looking for an experienced event planner to handle logistics, vendor coordination, and timeline management.',
                'industry' => Industries::TOURISM_HOSPITALITY_RESTAURANTS,
                'function' => Functions::DIRECTOR_PROFIT_CENTER,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 1000,
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Web Development Services',
                'description' => 'We offer professional web development services using the latest technologies...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 100,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Mobile App Development Services',
                'description' => 'We specialize in mobile app development for iOS and Android platforms...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 1000,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'SEO Consultation Services',
                'description' => 'Get expert advice on improving your website\'s SEO and online visibility...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => 899.99,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Social Media Marketing Services',
                'description' => 'We offer comprehensive social media marketing services to boost your brand...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Content Writing Services',
                'description' => 'Get high-quality content writing services for your website or blog...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Gardening Services Available',
                'description' => 'Offering professional gardening services including lawn maintenance, landscaping, and garden design. Experienced with a variety of plants and garden styles.',
                'industry' => Industries::AGRICULTURE_ENVIRONMENT_GREEN_SPACES,
                'function' => Functions::QUALITY_HYGIENE_SAFETY_ENVIRONMENT,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                 'price' => null,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Home Cleaning Services',
                'description' => 'Experienced cleaning service offering deep cleaning, regular maintenance, and specialized cleaning for carpets and upholstery. Environmentally friendly products used.',
                'industry' => Industries::TOURISM_HOSPITALITY_RESTAURANTS,
                'function' => Functions::QUALITY_HYGIENE_SAFETY_ENVIRONMENT,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => null,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Personal Fitness Training',
                'description' => 'Certified personal trainer offering customized fitness plans, one-on-one coaching, and nutritional guidance. Specialized in weight management and strength training.',
                'industry' => Industries::FITNESS_COACH_SPORTS_CLUB,
                'function' => Functions::COACH,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => null,
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Pet Sitting and Dog Walking Services',
                'description' => 'Experienced pet sitter providing in-home pet care, dog walking, and playtime for dogs and cats. Trusted by pet owners for reliable and compassionate care.',
                'industry' => Industries::OTHER,
                'function' => Functions::OTHER,
                'location' => $cities[array_rand($cities)],
                'job_type' => 'Freelance',
                'price' => null,
                'user_id' => $userIds[array_rand($userIds)],
            ]
            
        ];

        foreach ($datas as $d) {
            $post = Post::create($d);
            if($post->post_type == 'service offer' || $post->post_type == 'service request'){
                $tag = Tag::where('name', 'FREELANCE')->first();
                $post->tags()->attach($tag);
            }else{
                $tag = Tag::where('name', 'EMPLOYMENT')->first();
                $post->tags()->attach($tag);
            }
            $post->image()->create(['type' => 'image', 'path' => 'resources\images\website-id.png']);
        }
        
        
    }
}
