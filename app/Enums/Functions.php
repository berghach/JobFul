<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

 /**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Functions extends Enum
{
    const PURCHASE = 'Purchase';
    const SECURITY_SURVEILLANCE = 'Security / Surveillance';
    const SALES_ASSISTANT_RECEPTION = 'Assistant / Sales / Reception';
    const EXECUTIVE_SECRETARY = 'Executive Secretary / Assistant';
    const CONSTRUCTION_BTP = 'Construction - General / Second Work';
    const BUILDING_STUDIES_ARCHITECTURE = 'Building Studies / Architecture';
    const DRIVER_DELIVERY_COURIER = 'Driver / Delivery / Courier';
    const COACH = 'Coach';
    const COMMERCIAL_TECHNICAL = 'Commercial / Technical';
    const COMMERCIAL_INDIVIDUALS_B2C = 'Commercial - Individuals (B2C)';
    const COMMERCIAL_PROFESSIONALS_B2B = 'Commercial - Professionals (B2B)';
    const IT_AGENCY_COM = 'IT / Agency Communication';
    const STORE_SALESPERSON_SHOWROOM = 'Store Salesperson / Showroom';
    const ACCOUNTING_MANAGEMENT_AUDIT_FINANCE = 'Accounting / Management / Audit / Finance';
    const COOK_SERVER_CLEANER_NANNY = 'Cook / Server / Cleaner / Nanny';
    const RESTAURANT_MANAGER = 'Restaurant Manager';
    const DIRECTOR_PROFIT_CENTER = 'Director / Profit Center Manager';
    const IMPORT_EXPORT = 'Import / Export';
    const IT_HARDWARE_DEVELOPMENT = 'IT - Hardware Development';
    const IT_DEVELOPMENT = 'IT - Development';
    const IT_WEBDESIGN_GRAPHICS = 'IT - Web Design / Graphics';
    const IT_INFORMATION_SYSTEMS = 'IT - Information Systems';
    const IT_SYSTEMS_NETWORKS = 'IT - Systems / Networks';
    const ENGINEERING_AGRO_AGRI = 'Engineering - Agro / Agri';
    const ENGINEERING_CHEMISTRY_PHARMACY_BIO = 'Engineering - Chemistry / Pharmacy / Bio';
    const ENGINEERING_ELECTRO_AUTOMATION = 'Engineering - Electro / Automation';
    const ENGINEERING_MECHANICAL_AERONAUTICAL = 'Engineering - Mechanical / Aeronautical';
    const ENGINEERING_TELECOMS_ELECTRONICS = 'Engineering - Telecoms / Electronics';
    const AUTOMOBILE_MECHANIC = 'Automobile Mechanic';
    const AUTOMOBILE_ENGINEER = 'Automobile Engineer';
    const LEGAL = 'Legal';
    const LOGISTICS_TRANSPORTATION = 'Logistics / Transportation';
    const MARKETING_COMMUNICATION = 'Marketing / Communication';
    const REAL_ESTATE_NEGOTIATION_MANAGEMENT = 'Real Estate Negotiation / Management';
    const PRODUCTION_MANAGEMENT_MAINTENANCE = 'Production - Management / Maintenance';
    const PRODUCTION_OPERATOR_LABORER = 'Production - Operator / Laborer';
    const QUALITY_HYGIENE_SAFETY_ENVIRONMENT = 'Quality / Hygiene / Safety / Environment';
    const HR_PERSONNEL_TRAINING = 'HR / Personnel / Training';
    const HEALTH_SOCIAL = 'Health / Social';
    const CUSTOMER_SERVICE_HOTLINE_CALL_CENTER = 'Customer Service / Hotline / Call Center';
    const OTHER = 'Other';

}
