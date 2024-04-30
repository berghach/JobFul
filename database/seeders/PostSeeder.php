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
        $datas = [
            [
                'post_type' => 'job request',
                'title' => 'Senior Software Engineer Position',
                'description' => 'We are looking for an experienced software engineer to join our team...',
                'industry' => Industries::INDUSTRY_ENGINEERING_ENERGY,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::Internship, 'job_type' => JobType::PartTime, 'study_level' => EducationLevel::BAC_PLUS_4]),
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Data Analyst Position',
                'description' => 'Looking for a skilled data analyst to analyze and interpret complex datasets...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::Remote, 'study_level' => EducationLevel::BAC_PLUS_3]),
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Marketing Manager Position',
                'description' => 'We are hiring a marketing manager to lead our marketing campaigns and strategies...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::Hybrid, 'study_level' => EducationLevel::BAC_PLUS_5]),
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'Front-end Developer Position',
                'description' => 'We are seeking a talented front-end developer to create responsive web interfaces...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDD, 'job_type' => JobType::OnSite, 'study_level' => EducationLevel::BAC_PLUS_3]),
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job request',
                'title' => 'HR Manager Position',
                'description' => 'Join our HR team and contribute to talent acquisition and management...',
                'industry' => Industries::HUMAN_RESOURCES_RECRUITMENT_TEMPORARY_WORK,
                'function' => Functions::HR_PERSONNEL_TRAINING,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::FullTime, 'study_level' => EducationLevel::BAC_PLUS_5]),
                'user_id' => $contractorIds[array_rand($contractorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Software Developer Position',
                'description' => 'We have an exciting opportunity for a software developer to join our innovative team...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::FullTime, 'study_level' => EducationLevel::BAC_PLUS_4]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Marketing Specialist Position',
                'description' => 'Looking for a marketing specialist with experience in SEO and content marketing...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::FullTime, 'study_level' => EducationLevel::BAC_PLUS_4]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'UX Designer Position',
                'description' => 'Join our design team and create user-friendly interfaces for our products...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::Hybrid, 'study_level' => EducationLevel::BAC_PLUS_5]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'IT Support Specialist Position',
                'description' => 'We are hiring an IT support specialist to provide technical assistance to our team...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDI, 'job_type' => JobType::OnSite, 'study_level' => EducationLevel::BAC_PLUS_3]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'job offer',
                'title' => 'Project Manager Position',
                'description' => 'We are looking for an experienced project manager to oversee our IT projects...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_INFORMATION_SYSTEMS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['contract' => Contract::CDD, 'job_type' => JobType::Hybrid, 'study_level' => EducationLevel::BAC_PLUS_5]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Graphic Design Services Needed',
                'description' => 'Looking for a graphic designer to create marketing materials for our brand...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 199.9]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'SEO Services Needed',
                'description' => 'Seeking an SEO expert to optimize our website and improve search rankings...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 350]),
                'user_id' => $operatorIds[array_rand($operatorIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Social Media Management Services Needed',
                'description' => 'Looking for a social media manager to handle our social media channels...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => null]),
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Content Writing Services Needed',
                'description' => 'Seeking a content writer to create engaging and informative content for our blog...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => null]),
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service request',
                'title' => 'Translation Services Needed',
                'description' => 'Looking for a professional translator to translate documents from English to French...',
                'industry' => Industries::BUSINESS_IMPORT_EXPORT,
                'function' => Functions::IMPORT_EXPORT,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 79.99]),
                'user_id' => $userIds[array_rand($userIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Web Development Services',
                'description' => 'We offer professional web development services using the latest technologies...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_WEBDESIGN_GRAPHICS,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 100]),
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Mobile App Development Services',
                'description' => 'We specialize in mobile app development for iOS and Android platforms...',
                'industry' => Industries::IT_MULTIMEDIA_INTERNET,
                'function' => Functions::IT_DEVELOPMENT,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 1000]),
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'SEO Consultation Services',
                'description' => 'Get expert advice on improving your website\'s SEO and online visibility...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => 899.99]),
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Social Media Marketing Services',
                'description' => 'We offer comprehensive social media marketing services to boost your brand...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => null]),
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
            [
                'post_type' => 'service offer',
                'title' => 'Content Writing Services',
                'description' => 'Get high-quality content writing services for your website or blog...',
                'industry' => Industries::MARKETING_COMMUNICATION_ADVERTISING_PR,
                'function' => Functions::MARKETING_COMMUNICATION,
                'location' => $cities[array_rand($cities)],
                'sections' => json_encode(['job_type' => 'freelance', 'price' => null]),
                'user_id' => $freelancerIds[array_rand($freelancerIds)],
            ],
        ];

        foreach ($datas as $d) {
            $post = Post::create($d);
            $post->tags()->attach(($post->post_type == 'service offer' || $post->post_type == 'service request') ? Tag::where('name', 'FREELANCE')->first() : Tag::where('name', 'EMPLOYMENT')->first());
            $post->image()->create(['type' => 'image', 'path' => 'resources\images\website-id.png']);
        }
        
        
    }
}
