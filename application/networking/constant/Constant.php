<?php

class Constant
{

    /***Login Start***/
    public $LoginUserNameKey = "username";
    public $LoginPasswordKey = "password";
    /***Login End***/

    /***Forgot Password Start***/
    public $ForgotPasswordUserIdKey = "userId";
    public $ForgotPasswordNewPasswordKey = "newPassword";
    /***Forgot Password***/

    /***Create User Start***/
    public $BranchIdKey = "branchId";
    public $EmailKey = "email";
    public $UserNameKey = "username";
    public $PasswordKey = "password";
    public $BlackListKey = "blackList";
    public $IsSuperAdminKey = "isSuperAdmin";
    public $IsCompanyAdminKey = "isCompanyAdmin";
    public $AccountManagerKey = "accountManager";
    public $SupplierRelationshipManagerKey = "supplierRelationshipManager";
    public $IsActiveKey = "isActive";
    public $DistributorIdKey = "distributorId";
    public $UserDetailsKey = "userDetails";
    public $FullNameKey = "fullName";
    public $NationalityKey = "nationality";
    public $DOBKey = "dob";
    public $MobileNumberKey = "mobileNumber";
    public $ExtensionKey = "extension";
    public $CompanyDetailsKey = "companyDetails";
    public $CompanyNameKey = "companyName";
    public $CompanyAddressKey = "companyAddress";
    public $DesignationKey = "designation";
    public $NatureOfBusinessKey = "natureOfBusiness";
    public $CityKey = "city";
    public $CountryKey = "country";
    public $Type_IdKey = "type_id";

    public $BranchIdValue = "1";
    public $BlackListValue = "0";
    public $IsSuperAdminValue = "1";
    public $IsCompanyAdminValue = "1";
    public $AccountManagerValue = "1";
    public $SupplierRelationshipManagerValue = "1";
    public $IsActiveValue = "0";
    public $DistributorIdValue = "1";
    public $FullNameValue = "1";
    /***Create User Start***/


    /***Change Password Start***/
    public $OldPasswordKey = "oldPassword";
    public $NewPasswordKey = "newPassword";
    /***Change Password Start***/

    public $ResetPasswordUserId = "userId";
    public $ResetPasswordNewPassword = "newPassword";


    /***Account Details Start***/
    public $AccountDetailsPersonalInfoKey = "personalInfo";
    public $AccountDetailsContactInfoKey = "contactInfo";
    public $AccountDetailsCompanyDetailsKey = "companyDetails";
    public $CreationDateAccountDetailsPersonalInfoKey = "creationDate";
    public $UserNameAccountDetailsPersonalInfoKey = "username";
    public $PasswordNameAccountDetailsPersonalInfoKey = "password";
    public $FirstNameAccountDetailsPersonalInfoKey = "firstName";
    public $LastNameAccountDetailsPersonalInfoKey = "lastName";
    public $DOBAccountDetailsPersonalInfoKey = "dob";
    public $NationalityAccountDetailsPersonalInfoKey = "nationality";
    public $EmailAccountDetailsContactInfoKey = "email";
    public $MobileNumberAccountDetailsContactInfoKey = "mobilenumber";
    public $ExtensionAccountDetailsContactInfoKey = "extension";
    public $CompanyDetailsCompanyNameKey = "companyName";
    public $CompanyDetailsCompanyAddressKey = "companyAddress";
    public $CompanyDetailsNatureOfBusinessKey = "natureOfBusiness";
    public $CompanyDetailsCompanyCityKey = "city";
    public $CompanyDetailsCompanyCountryKey = "country";
    public $CompanyDetailsCompanyTypeIdKey = "type_id";
    public $CompanyDetailsCompanyDesignationKey = "designation";
    /***Account Details End***/

    /***Send Email Start***/
    // public $sendemailEmailKey = "Email";
    // public $sendemailFullnameKey = "Fullname";
    // public $sendemailMessageKey = "Message";
    public $sendemailToKey = "to";
    public $sendemailSubjectKey = "subject";
    public $sendemailBodyKey = "body";
    /***Send Email End***/

    /***Add Area Start***/
    public $areanameKey = "areaName";
    public $areapictureKey = "areaPicture";
    /***Add Area End***/
    public $AddProjectProjectNameKey = "projectName";
    public $AddProjectClientNameKey = "clientName";
    public $AddProjectCountryNameKey = "country";
    public $AddProjectCityKey = "city";
    public $AddProjectUserIdKey = "user__id";
    public $AddProjectRatingKey = "rating";
    public $AddProjectDescriptionKey = "description";
    public $AddProjectSchemaKey = "projectImageSchema";
    public $ProjectAreaKey = "projectArea";
    public $ProjectAreaAreaNameKey = "areaName";
    public $ProjectAreaBudgetKey = "budget";
    public $ProjectAreaAreaTypeIdKey = "areaType__id";  
    
    public $CreateEventUserIDKey = "user__id";
    public $CreateEventEventNameKey = "event__name";
    public $CreateEventEventDateKey = "event__date";
    public $CreateEventEventStartTimeKey = "event__starttime";
    public $CreateEventEventEndTimeKey = "event__endtime";
    public $CreateEventRemindBeforeTimeKey = "remind__beforetime";
    public $CreateEventEventInviteEmailKey = "event__invitemail";
    public $CreateEventEventAdditionalNotesKey = "event__additionalnotes";
}
