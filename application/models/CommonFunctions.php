<?php

class CommonFunctions extends CI_Model
{


	function __construct()
	{
		$this->load->database();
	}

	public function getcategoryDDL($selected = "0")
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();

		$categoryData = '<option value="">Select Category</option>';

		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->Id) {
					$categoryData = $categoryData . '<option selected value="' . $data->Id . '">' . $data->Name . '</option>';
				} else {
					$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
				}
			} else {
				$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
			}
		}

		return $categoryData;
	}

	public function getProductKeyword($ProductId)
	{
		$this->db->select('*');
		$this->db->from('productkeyword');
		$this->db->where('ProductId', $ProductId);

		$query = $this->db->get();
		$dtrTrt = "";
		foreach ($query->result() as $data) {
			$dtrTrt = $data->Keywords;
		}

		return $dtrTrt;
	}
	public function getProductDetails($ProductId)
	{
		$query = $this->db->query('SELECT pr.*, sc.Id AS SubCategoryId,cat.Id AS CategoryId, br.Name AS BrandName FROM `products` pr, `sub_category` sc, `category` cat, `brands` br WHERE sc.`Id`=pr.`SubCategoryId` AND sc.`CategoryId`=cat.`Id` AND br.`Id`=pr.`BrandId` AND pr.Id=' . $ProductId . ';');

		$itemarrr = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$itemarrr["Id"] = $row->Id;
				$itemarrr["IsActive"] = $row->IsActive;
				$itemarrr["ItemName"] = $row->Name;
				$itemarrr["CategoryId"] = $row->CategoryId;
				$itemarrr["SubCategoryId"] = $row->SubCategoryId;
				$itemarrr["BrandName"] = $row->BrandName;
				$itemarrr["TradeTypeId"] = $row->TradeTypeId;
			}
		}
		return $itemarrr;
	}
	/* public function getProjectQoutationsByUserId($UserId)
	{
		$query = $this->db->query('SELECT pq.*,bp.ProjectName FROM buyer_projects bp,project_quotation pq WHERE pq.ProjectId=bp.Id');

		$returnarr = array();
		$itemarrr = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$itemarrr["Id"] = $row->Id;
				$itemarrr["QouteName"] = $row->ReferenceName;
				$itemarrr["IsSubmitted"] = $row->IsSubmitted;
				$itemarrr["ProjectName"] = $row->ProjectName;
				$itemarrr["DateTime"] = $row->DateTime;
				array_push($returnarr, $itemarrr);
			}
		} else {
			$itemarrr["Id"] = $row->Id;
			$itemarrr["QouteName"] = "";
			$itemarrr["IsSubmitted"] = "";
			$itemarrr["ProjectName"] = "";
			$itemarrr["DateTime"] = $row->DateTime;
			array_push($returnarr, $itemarrr);
		}

		return $returnarr;
	} */
	public function getProductsReviewedByUserId($UserId)
	{
		$query = $this->db->query('SELECT pr.Id,pr.`IsActive`,pr.Name AS ItemName, sc.Name AS SubCategoryName,cat.Name AS CategoryName,br.Name AS BrandName FROM `products` pr, `sub_category` sc, `category` cat, `brands` br WHERE sc.`Id`=pr.`SubCategoryId` AND sc.`CategoryId`=cat.`Id` AND br.`Id`=pr.`BrandId` AND UserId=' . $UserId . ' ORDER BY pr.Id DESC;');

		$returnarr = array();
		$itemarrr = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$itemarrr["Id"] = $row->Id;
				$itemarrr["IsActive"] = $row->IsActive;
				$itemarrr["ItemName"] = $row->ItemName;
				$itemarrr["Category"] = $row->CategoryName . " > " . $row->SubCategoryName;
				$itemarrr["BrandName"] = $row->BrandName;

				array_push($returnarr, $itemarrr);
			}
		}
		// } else {
		// 	$itemarrr["Id"] = "";
		// 	$itemarrr["IsActive"] = "";
		// 	$itemarrr["ItemName"] = "";
		// 	$itemarrr["Category"] = "";
		// 	$itemarrr["BrandName"] = "";

		// 	array_push($returnarr, $itemarrr);
		// }

		return $returnarr;
	}

	public function getsubcategoryDDL($selected = "0")
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();

		$categoryData = '<option value="">Select Sub Category</option>';

		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->Id) {
					$categoryData = $categoryData . '<option selected value="' . $data->Id . '">' . $data->Name . '</option>';
				} else {
					$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
				}
			} else {
				$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
			}
		}

		return $categoryData;
	}

	public function gettradeTypesDDL($selectedId)
	{
		$this->db->select('*');
		$this->db->from('trade_types');
		$query = $this->db->get();

		$categoryData = '<option value="">Select Trade Type</option>';

		foreach ($query->result() as $data) {
			if ($selectedId != "0") {
				if ($selectedId == $data->Id) {
					$categoryData = $categoryData . '<option selected value="' . $data->Id . '">' . $data->Name . '</option>';
				} else {
					$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
				}
			} else {
				$categoryData = $categoryData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
			}
		}

		return $categoryData;
	}

	public function getProductDetailsParameters($ProductId)
	{
		$this->db->select('*');
		$this->db->from('productdetails');
		$this->db->where("ProductId", $ProductId);

		$query = $this->db->get();

		$DetailsData = array();

		foreach ($query->result() as $data) {
			$x = $data->Key;
			$DetailsData[$x] = $data->Value;
		}

		return $DetailsData;
	}

	public function GetUserData($UserId)
	{
		$this->db->select('*');
		$this->db->from('app_users');
		$this->db->where("Id", $UserId);

		$query = $this->db->get();

		$DetailsData = array();

		foreach ($query->result() as $data) {
			$DetailsData["Id"] = $data->Id;
			$DetailsData["BranchId"] = $data->BranchId;
			$DetailsData["Email"] = $data->Email;
			$DetailsData["Password"] = $data->Password;
			$DetailsData["CreationDate"] = $data->CreationDate;
			$DetailsData["BlackList"] = $data->BlackList;
			$DetailsData["IsSuperAdmin"] = $data->IsSuperAdmin;
			$DetailsData["IsCompanyAdmin"] = $data->IsCompanyAdmin;
			$DetailsData["AccountManager"] = $data->AccountManager;
			$DetailsData["SupplierRelationshipManager"] = $data->SupplierRelationshipManager;
			$DetailsData["IsActive"] = $data->IsActive;
			$DetailsData["DistributorId"] = $data->DistributorId;
		}

		return $DetailsData;
	}
	function getDateForDatabase($date)
	{
		$timestamp = strtotime($date);
		$date_formated = date('Y-m-d H:i:s', $timestamp);
		return $date_formated;
	}
	public function getareaTypes()
	{
		$this->db->select('*');
		$this->db->from('areatype');
		$query = $this->db->get();
		$areaTypeData = array();


		foreach ($query->result() as $data) {

			array_push($areaTypeData, $data->Name);
		}

		return json_encode($areaTypeData);
	}
	public function getareaTypesDDL()
	{
		$this->db->select('*');
		$this->db->from('areatype');
		$query = $this->db->get();

		$areaTypeData = '<option value="">Select Area Type</option>';

		foreach ($query->result() as $data) {
			$areaTypeData = $areaTypeData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
		}

		return $areaTypeData;
	}

	public function getCountries($selectedCountry)
	{
		$this->db->select('*');
		$this->db->from('country');

		$query = $this->db->get();

		$DetailsData = '<option value="">Select Country</option>';

		foreach ($query->result() as $data) {
			if ($selectedCountry == $data->Value) {
				$DetailsData = $DetailsData . '<option selected value="' . $data->Value . '">' . $data->Name . '</option>';
			} else {
				$DetailsData = $DetailsData . '<option value="' . $data->Value . '">' . $data->Name . '</option>';
			}
		}

		return $DetailsData;
	}
	public function getDesignation($userId, $selectedDesignation)
	{

		$this->db->select('designation');
		$this->db->from('app_users');
		$this->db->where('Id', $userId);

		$query = $this->db->get();

		$DetailsData = '<option value="">Select Designation</option>';

		foreach ($query->result() as $data) {
			if ($selectedDesignation == $data->designation) {
				$DetailsData = $DetailsData . '<option selected value="' . $data->designation . '">' . $data->designation . '</option>';
			} else {
				$DetailsData = $DetailsData . '<option value="' . $data->designation . '">' . $data->designation . '</option>';
			}
		}

		return $DetailsData;
	}


	public function updateProfileImage($imageName, $userId)
	{
		$this->db->set('ProfilePicture', $imageName);
		$this->db->where('UserId', $userId);
		$this->db->update('user_profile');
	}
	public function updatecompanyLogo($imageName, $CompanyId)
	{
		$this->db->set('Logo', $imageName);
		$this->db->where('Id', $CompanyId);
		$this->db->update('company');
	}

	public function getdistributor($Id)
	{
		$this->db->select('*');
		$this->db->from('distributors');
		$this->db->where('Id', $Id);

		$query = $this->db->get();

		$DetailsData = array();

		foreach ($query->result() as $data) {
			$DetailsData["Id"] = $data->Id;
			$DetailsData["Name"] = $data->Name;
			$DetailsData["Phone"] = $data->Phone;
			$DetailsData["ContactPersonName"] = $data->ContactPersonName;
			$DetailsData["ContactPersonPhone"] = $data->ContactPersonPhone;
			$DetailsData["Address"] = $data->Address;
			$DetailsData["City"] = $data->City;
			$DetailsData["CountryId"] = $data->CountryId;
		}

		return $DetailsData;
	}

	public function getDistributorsByCompanyId($CompanyId)
	{
		$this->db->select('distributors.*,country.Name AS CountryName');
		$this->db->from('distributors');

		$this->db->where('CompanyId', $CompanyId);

		$this->db->join('country', 'country.Value = distributors.CountryId');
		$this->db->order_by('distributors.CreatedDate', 'DESC');
		$query = $this->db->get();

		$DetailsData = array();
		$Detailsret = array();

		foreach ($query->result() as $data) {
			$DetailsData["DistributorId"] = $data->Id;
			$DetailsData["CountryName"] = $data->CountryName;
			$DetailsData["Name"] = $data->Name;
			$DetailsData["ContactPersonName"] = $data->ContactPersonName;
			$DetailsData["City"] = $data->City;
			array_push($Detailsret, $DetailsData);
		}

		return $Detailsret;
	}
	public function getProjectStatusDDL()
	{
		$this->db->select('*');
		$this->db->from('project_status');
		$query = $this->db->get();

		$projectStatusData = '<option value="">Select Project Status</option>';

		foreach ($query->result() as $data) {
			$projectStatusData = $projectStatusData . '<option value="' . $data->Id . '">' . $data->Name . '</option>';
		}

		return $projectStatusData;
	}
	public function GetCompanyData($BranchId)
	{
		$query = $this->db->query('SELECT cp.* FROM `company` cp, `company_branch` cb WHERE cb.`CompanyId`=cp.`Id` AND `cb`.`Id`=' . $BranchId);

		$returnarr = array();
		$itemarrr = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$itemarrr["Id"] = $row->Id;
				$itemarrr["Name"] = $row->Name;
				$itemarrr["BusinessLicenseNumber"] = $row->BusinessLicenseNumber;
				$itemarrr["Email"] = $row->Email;
				$itemarrr["Phone"] = $row->Phone;
				$itemarrr["Address"] = $row->Address;
				$itemarrr["City"] = $row->City;
				$itemarrr["State"] = $row->State;
				$itemarrr["CountryId"] = $row->CountryId;
				$itemarrr["NatureOfBusiness"] = $row->NatureOfBusiness;
				$itemarrr["AccountType"] = $row->AccountType;
				$itemarrr["IsActive"] = $row->IsActive;
				$itemarrr["CreationDate"] = $row->CreationDate;
				$itemarrr["TaxNumber"] = $row->TaxNumber;
				$itemarrr["IncorporationType"] = $row->IncorporationType;
				$itemarrr["YearOfIncorporation"] = $row->YearOfIncorporation;
				$itemarrr["CompanySize"] = $row->CompanySize;
				$itemarrr["AnnualTurnover"] = $row->AnnualTurnover;
				$itemarrr["Logo"] = $row->Logo;
			}
		}

		return $itemarrr;
	}

	public function GetUserProfileData($UserId)
	{
		$this->db->select('*');
		$this->db->from('user_profile');
		$this->db->where("UserId", $UserId);

		$query = $this->db->get();

		$DetailsData = array();

		foreach ($query->result() as $data) {
			$DetailsData["FullName"] = $data->FullName;
			$DetailsData["Designation"] = $data->Designation;
			$DetailsData["Gender"] = $data->Gender;
			$DetailsData["MobileNumber"] = $data->MobileNumber;
			$DetailsData["Phone"] = $data->Phone;
			$DetailsData["Address"] = $data->Address;
			$DetailsData["City"] = $data->City;
			$DetailsData["State"] = $data->State;
			$DetailsData["Country"] = $data->Country;
			$DetailsData["ProfilePicture"] = $data->ProfilePicture;
			$DetailsData["Extension"] = $data->Extension;
		}

		return $DetailsData;
	}

	public function getProductImages($ProductId)
	{
		$this->db->select('*');
		$this->db->from('productimage');
		$this->db->where("ProductId", $ProductId);

		$query = $this->db->get();

		$DetailsData = array();
		$returnarr = array();

		foreach ($query->result() as $data) {
			$DetailsData["ImageName"] = $data->ImageName;
			$DetailsData["Id"] = $data->Id;
			$DetailsData["Dir"] = $this->addpadding($ProductId);
			array_push($returnarr, $DetailsData);
		}

		return $returnarr;
	}

	public function getProductDistributorParameters($ProductId)
	{
		$this->db->select('*');
		$this->db->from('product_distributor');
		$this->db->where("ProductId", $ProductId);

		$query = $this->db->get();

		$DetailsData = array();

		foreach ($query->result() as $data) {
			$DetailsData["DistributorId"] = $data->DistributorId;
			$DetailsData["Price"] = $data->Price;
			$DetailsData["Currency"] = $data->Currency;
			$DetailsData["IsGroupPricing"] = $data->IsGroupPricing;
			$DetailsData["PerGroupValue"] = $data->PerGroupValue;
			$DetailsData["Description"] = $data->Description;
			$DetailsData["ShippingInfo"] = $data->ShippingInfo;
		}

		return $DetailsData;
	}

	//Add padding for image saving folder naming conventions
	public function addpadding($Id)
	{
		if (strlen($Id) < 2) {
			$Id = "00000" . $Id;
		} elseif (strlen($Id) < 3) {
			$Id = "0000" . $Id;
		} elseif (strlen($Id) < 4) {
			$Id = "000" . $Id;
		} elseif (strlen($Id) < 5) {
			$Id = "00" . $Id;
		} elseif (strlen($Id) < 6) {
			$Id = "0" . $Id;
		} else {
			$Id = $Id;
		}
		return $Id;
	}

	public function getTags($data)
	{
		$str_arr = explode("|", $data);
		if (sizeof($str_arr) == 0) {
			return "";
		}
		for ($i = 0; $i <= sizeof($str_arr); $i++) {
			if (preg_match('/[\[\]\'><>,|=_+¬-]/', $str_arr[$i])) {
				$strtags = str_replace(array('[', ']'), '', $str_arr[$i]);
				break;
			}
		}
		$strtags = explode(",", $strtags);
		return $strtags;
	}

	public function getCurrentDateForDB()
	{
		# code...
		$current_date = date('Y-m-d H:i:s');
		return $current_date;
	}


	public function projectColorByProductIdDDL($productId)
	{
		# code...

		$this->db->select("Value");
		$this->db->from("productdetails");
		$this->db->where('ProductId', $productId)->where('Key', 'Color');
		$query = $this->db->get();



		$colorData = '<option value="">Select Color</option>';

		foreach ($query->result() as $data) {
			$colorData = $colorData . '<option id="Color" value="' . $data->Value . '">' . $data->Value . '</option>';
		}

		return $colorData;
	}

	/*Zviko additions*/
	public function GetCategories($selected = "0")
	{
		$this->db->select('Id AS CategoryID,Name AS CategoryName');
		$this->db->from('category');
		$query = $this->db->get();

		$categoryData = '<option value="">Select Category</option>';
		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->CategoryID) {
					$categoryData = $categoryData . '<option selected value="' . $data->CategoryID . '">' . $data->CategoryName . '</option>';
				} else {
					$categoryData = $categoryData . '<option value="' . $data->CategoryID . '">' . $data->CategoryName . '</option>';
				}
			} else {
				$categoryData = $categoryData . '<option value="' . $data->CategoryID . '">' . $data->CategoryName . '</option>';
			}
		}

		return $categoryData;
	}

	public function GetSubCategories($categoryId, $selected = "0")
	{
		$this->db->select('Id AS SubCategoryID, Name AS SubCategoryName');
		$this->db->from('sub_category');
		$this->db->where("CategoryId", $categoryId);
		$query = $this->db->get();
		$categoryData = '<option value="">Select Sub Category</option>';
		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->SubCategoryID) {
					$categoryData = $categoryData . '<option selected value="' . $data->SubCategoryID . '">' . $data->SubCategoryName . '</option>';
				} else {
					$categoryData = $categoryData . '<option value="' . $data->SubCategoryID . '">' . $data->SubCategoryName . '</option>';
				}
			} else {
				$categoryData = $categoryData . '<option value="' . $data->SubCategoryID . '">' . $data->SubCategoryName . '</option>';
			}
		}

		return $categoryData;
	}


	/**
	 * Checks if a folder exist and return canonicalized absolute pathname (sort version)
	 * @param string $folder the path being checked.
	 * @return mixed returns the canonicalized absolute pathname on success otherwise FALSE is returned
	 */
	function folder_exist($folder)
	{
		// Get canonicalized absolute pathname
		$path = realpath($folder);

		// If it exist, check if it's a directory
		return ($path !== false and is_dir($path)) ? $path : false;
	}


	public function GetCountry($selected = "0")
	{
		$this->db->select('Id AS CountryID,Name AS CountryName');
		$this->db->from('country');
		$query = $this->db->get();

		$countryData = '<option value="">Select Country</option>';
		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->CountryID) {
					$countryData = $countryData . '<option selected value="' . $data->CountryID . '">' . $data->CountryName . '</option>';
				} else {
					$countryData = $countryData . '<option value="' . $data->CountryID . '">' . $data->CountryName . '</option>';
				}
			} else {
				$countryData = $countryData . '<option value="' . $data->CountryID . '">' . $data->CountryName . '</option>';
			}
		}

		return $countryData;
	}


	public function GetCountryStates($countryId, $selected = "0")
	{
		$this->db->select('Id AS state_id, name AS StateName');
		$this->db->from('country_states');
		$this->db->where("country_id", $countryId);
		$query = $this->db->get();
		$stateData = '<option value="">Select State</option>';
		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->state_id) {
					$stateData = $stateData . '<option selected value="' . $data->state_id . '">' . $data->StateName . '</option>';
				} else {
					$stateData = $stateData . '<option value="' . $data->state_id . '">' . $data->StateName . '</option>';
				}
			} else {
				$stateData = $stateData . '<option value="' . $data->state_id . '">' . $data->StateName . '</option>';
			}
		}

		return $stateData;
	}

	public function GetCountryStatesCity($stateId, $selected = "0")
	{
		$this->db->select('Id AS city_id, name AS CityName');
		$this->db->from('country_states_cities');
		$this->db->where("state_id", $stateId);
		$query = $this->db->get();
		$cityData = '<option value="">Select City</option>';
		foreach ($query->result() as $data) {
			if ($selected != 0) {
				if ($selected == $data->city_id) {
					$cityData = $cityData . '<option selected value="' . $data->city_id . '">' . $data->CityName . '</option>';
				} else {
					$cityData = $cityData . '<option value="' . $data->city_id . '">' . $data->CityName . '</option>';
				}
			} else {
				$cityData = $cityData . '<option value="' . $data->city_id . '">' . $data->CityName . '</option>';
			}
		}

		return $cityData;
	}
}
