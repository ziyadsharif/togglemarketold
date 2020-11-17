<?php 

$GLOBALS = array(
    'PERPAGE_LIMIT' => 50
);

class Catalogue extends CI_Model {
	
		
	function __construct()
	{
		$this->load->database();
	}
	
	
	public function GetItem($Id)
	{
		
		$this->db->select('*');
		$this->db->from('sampletems');
		$this->db->where('Id',$Id);
		
		$query = $this->db->get();
		$SponsorData=array();
		foreach ($query->result() as $data)
		{
			$SponsorData["Id"]=$data->Id;
			$SponsorData["Name"]=$data->Name;
			$SponsorData["Category"]=$data->Category;
			$SponsorData["SubCategory"]=$data->SubCategory;
			$SponsorData["Price"]=$data->Price;
			$SponsorData["Images"]=$data->Images;
			$SponsorData["ImagePath"]=$data->ImagePath;
			$SponsorData["Dimensions"]=$data->Dimensions;
			$SponsorData["Materials"]=$data->Materials;
		}
		
		return $SponsorData;
	}
	public function GetHomeItemsByCate($cat)
	{
		
		$this->db->select('Id,Name,Category,SubCategory,Price,Images,ImagePath');
		$this->db->from('sampletems');
		$this->db->where('SubCategory',$cat);
		$query = $this->db->get();
		
		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData=array();
			$SponsorData["Id"]=$data->Id;
			$SponsorData["Name"]=$data->Name;
			$SponsorData["Category"]=$data->Category;
			$SponsorData["SubCategory"]=$data->SubCategory;
			$SponsorData["Price"]=$data->Price;
			$SponsorData["Images"]=$data->Images;
			$SponsorData["ImagePath"]=$data->ImagePath;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}
	
	public function GetHomeItems()
	{
		
		$this->db->select('Id,Name,Category,SubCategory,Price,Images,ImagePath');
		$this->db->from('sampletems');
		
		$query = $this->db->get();
		
		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData=array();
			$SponsorData["Id"]=$data->Id;
			$SponsorData["Name"]=$data->Name;
			$SponsorData["Category"]=$data->Category;
			$SponsorData["SubCategory"]=$data->SubCategory;
			$SponsorData["Price"]=$data->Price;
			$SponsorData["Images"]=$data->Images;
			$SponsorData["ImagePath"]=$data->ImagePath;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}
	
	public function getCategorySubCat()
	{
		$this->db->select('DISTINCT(Category) AS Category');
		$this->db->from('sampletems');
		$query = $this->db->get();
		
		$SponsorData=array();
		
		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData["Category"]=$data->Category;
			
			$this->db->select('DISTINCT(SubCategory) AS SubCategory');
			$this->db->from('sampletems');
			$this->db->where("Category",$SponsorData["Category"]);
			
			$query2 = $this->db->get();
			$SponsorDataSub=array();
			foreach ($query2->result() as $data2)
			{
				array_push($SponsorDataSub,$data2->SubCategory);
			}
			
			$SponsorData["SubCategory"]=$SponsorDataSub;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}
	
	/*Zviko Additions*/
	public function GetProduct($Id)
	{
		
		try{
			$this->db->select('products.Id,products.Name,category.Name AS Category,sub_category.Name AS SubCategory,product_distributor.Price, product_distributor.Description, product_distributor.ShippingInfo,brands.Name AS BrandName');
			$this->db->from('products');
			$this->db->join('product_distributor','product_distributor.ProductId=products.Id');
			$this->db->join('sub_category','sub_category.Id=products.SubCategoryId');
			$this->db->join('category','category.Id=sub_category.CategoryId');
			$this->db->join('brands','brands.Id=products.BrandId');
			$this->db->where('products.Id',$Id);
			$query = $this->db->get();
			
			$data = $query->row();
				
			$SponsorData["Id"]=$data->Id;
			$SponsorData["Name"]=$data->Name;
			$SponsorData["Category"]=$data->Category;
			$SponsorData["SubCategory"]=$data->SubCategory;
			$SponsorData["Price"]=$data->Price;
			$SponsorData["ProductDetails"]=$this->GetProductDetails($Id);
			$SponsorData["Images"]= $this->GetProductImages($Id); 
			$SponsorData["Description"]= $data->Description; 
			$SponsorData["ShippingInfo"]= $data->Description; 
			$SponsorData["BrandName"]= $data->BrandName; 
		}
		catch(Exception $ex){

		}
		
		return $SponsorData;
	}

	public function GetCategories()
	{
		$this->db->select('Id AS CategoryID,Name AS Category');
		$this->db->from('category');
		$query = $this->db->get();

		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData=array();
			$SponsorData["CategoryName"]=$data->Category;
			$SponsorData["CategoryId"]=$data->CategoryID;
			
			$this->db->select('Id AS SubCategoryID, Name AS SubCategoryName');
			$this->db->from('sub_category');
			$this->db->where("CategoryId",$data->CategoryID);
			
			$query2 = $this->db->get();
			$SponsorDataSub=array();
			foreach ($query2->result() as $data2)
			{
				$SponsorDataSubb=array();
				$SponsorDataSubb["SubCategoryName"] = $data2->SubCategoryName;
				$SponsorDataSubb["SubCategoryId"] = $data2->SubCategoryID;
				array_push($SponsorDataSub,$SponsorDataSubb);
			}
			
			$SponsorData["SubCategory"]=$SponsorDataSub;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}

	/*function pagination($count, $pagelimit, $pageNum) {
		//global $PERPAGE_LIMIT;
		$output = '<ul class="pagination justify-content-center">';
		if(!isset($_REQUEST["pageNum"])) $_REQUEST["pageNum"] = 1;
		if($GLOBALS['PERPAGE_LIMIT'] != 0)
		$pages = ceil($count/$GLOBALS['PERPAGE_LIMIT']);
		//$pages = ceil($count/$pagelimit);
		//if pages exists after loop's lower limit
		if($pages>1) {
		if(($_REQUEST["pageNum"]-3)>0) {
		//$output = $output . '<li class="page-item"><a href="' . $href . 'page=1" class="page-link">1</a></li>';
		$output = $output . '<li class="page-item" data-pageno="1"><span id="1" class="page-link">1</span></li>';
		}
		if(($_REQUEST["pageNum"]-3)>1) {
		$output = $output . '<span class="page-link">...</span>';
		}
		
		//Loop for provides links for 2 pages before and after current page
		for($i=($_REQUEST["pageNum"]-2); $i<=($_REQUEST["pageNum"]+2); $i++)	{
		if($i<1) continue;
		if($i>$pages) break;
		if($_REQUEST["pageNum"] == $i)
		$output = $output . '<li class="page-item" data-pageno='.$i.'><span id='.$i.' class="page-link current-page">'.$i.'</span></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href . "page=".$i . '" class="page-link">'.$i.'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$i.'><span id='.$i.' class="page-link">'.$i.'</span></li>';
		}
		
		//if pages exists after loop's upper limit
		if(($pages-($_REQUEST["pageNum"]+2))>1) {
		$output = $output . '<span class="page-link">...</span>';
		}
		if(($pages-($_REQUEST["pageNum"]+2))>0) {
		if($_REQUEST["pageNum"] == $pages)
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><span id=' . ($pages) .' class="page-link current-page">' . ($pages) .'</span></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href .  "page=" .($pages) .'" class="page-link">' . ($pages) .'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><span id=' . ($pages) .' class="page-link">' . ($pages) .'</span></li>';
		}
		$output = $output . '</ul>';
		}
		return $output;
	}*/

	function pagination($count, $pagelimit, $pageNum) {
		//global $PERPAGE_LIMIT;
		if($pageNum == 1){
			$output = '<div class="pg-prev-ctrls disabled">
			<a href="" onclick="return false;"><<</a>
			<a href="" onclick="return false;" id="pg-prev">Previous</a>
			</div><ul>';
		}
		else{
			$output = '<div class="pg-prev-ctrls">
			<a href="" data-pageno="1" class="backward"><<</a>
			<a href="" data-pageno='.$pageNum.' class="previous-page" id="pg-prev">Previous</a>
			</div><ul>';
		}
		
		if(!isset($pageNum)) $pageNum = 1;
		if($pagelimit != 0)
		//$pages = ceil($count/$GLOBALS['PERPAGE_LIMIT']);
		$pages = ceil($count/$pagelimit);
		//if pages exists after loop's lower limit
		if($pages>1) {
		if(($pageNum-3)>0) {
		//$output = $output . '<li class="page-item"><a href="' . $href . 'page=1" class="page-link">1</a></li>';
		$output = $output . '<li class="page-item" data-pageno="1"><a>1</a></li>';
		}
		if(($pageNum-3)>1) {
		$output = $output . '<span>...</span>';
		}
		
		//Loop for provides links for 2 pages before and after current page
		for($i=($pageNum-2); $i<=($pageNum+2); $i++)	{
		if($i<1) continue;
		if($i>$pages) break;
		if($pageNum == $i)
		$output = $output . '<li class="page-item" data-pageno='.$i.'><a class="active">'.$i.'</a></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href . "page=".$i . '" class="page-link">'.$i.'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$i.'><a>'.$i.'</a></li>';
		}
		
		//if pages exists after loop's upper limit
		if(($pages-($pageNum+2))>1) {
		$output = $output . '<span>...</span>';
		}
		if(($pages-($pageNum+2))>0) {
		if($pageNum == $pages)
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><a class="active">' . ($pages) .'</a></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href .  "page=" .($pages) .'" class="page-link">' . ($pages) .'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><a>' . ($pages) .'</a></li>';
		}

		if($pageNum == $pages){
			$output = $output . '</ul><div class="pg-next-ctrls disabled">
			<a href="" onclick="return false;" id="pg-next">Next</a>
			<a href="" onclick="return false;">>></a>
			</div>';
		}
		else{
			$output = $output . '</ul><div class="pg-next-ctrls">
			<a href="" data-pageno='.$pageNum.' class="next-page" id="pg-next">Next</a>
			<a href="" data-pageno='.$pages.' class="forward">>></a>
			</div>';
		}
		
		}
		return $output;
	}

	/*function oldpagination($count, $pagelimit, $pageNum) {
		//global $PERPAGE_LIMIT;
		$output = '<ul class="pagination justify-content-center">';
		if(!isset($pageNum)) $pageNum = 1;
		if($pagelimit != 0)
		//$pages = ceil($count/$GLOBALS['PERPAGE_LIMIT']);
		$pages = ceil($count/$pagelimit);
		//if pages exists after loop's lower limit
		if($pages>1) {
		if(($pageNum-3)>0) {
		//$output = $output . '<li class="page-item"><a href="' . $href . 'page=1" class="page-link">1</a></li>';
		$output = $output . '<li class="page-item" data-pageno="1"><span id="1" class="page-link">1</span></li>';
		}
		if(($pageNum-3)>1) {
		$output = $output . '<span class="page-link">...</span>';
		}
		
		//Loop for provides links for 2 pages before and after current page
		for($i=($pageNum-2); $i<=($pageNum+2); $i++)	{
		if($i<1) continue;
		if($i>$pages) break;
		if($pageNum == $i)
		$output = $output . '<li class="page-item" data-pageno='.$i.'><span id='.$i.' class="page-link current-page">'.$i.'</span></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href . "page=".$i . '" class="page-link">'.$i.'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$i.'><span id='.$i.' class="page-link">'.$i.'</span></li>';
		}
		
		//if pages exists after loop's upper limit
		if(($pages-($pageNum+2))>1) {
		$output = $output . '<span class="page-link">...</span>';
		}
		if(($pages-($pageNum+2))>0) {
		if($pageNum == $pages)
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><span id=' . ($pages) .' class="page-link current-page">' . ($pages) .'</span></li>';
		else				
		//$output = $output . '<li class="page-item"><a href="' . $href .  "page=" .($pages) .'" class="page-link">' . ($pages) .'</a></li>';
		$output = $output . '<li class="page-item" data-pageno='.$pages.'><span id=' . ($pages) .' class="page-link">' . ($pages) .'</span></li>';
		}
		$output = $output . '</ul>';
		}
		return $output;
	}*/

	public function GetCatalogueItems()
	{
		try{
			$currentPage = 1;
			if(isset($_GET['page'])){
				$currentPage = $_GET['page'];
			}
			$startPage = ($currentPage-1)*$GLOBALS['PERPAGE_LIMIT'];
			if($startPage <= 0) $startPage = 1;
			//$href = "index.php/home/catalogue?";
			
			$this->db->select('products.Id,products.Name,product_distributor.Price');
			$this->db->from('products');
			$this->db->join('product_distributor','product_distributor.ProductId=products.Id');
			$this->db->where('products.IsActive',0);
			$this->db->limit($GLOBALS['PERPAGE_LIMIT'],$startPage);
			if(isset($_GET['sort'])){
				$sortby = $_GET['sort'];

				if($sortby == "asc"){
					$this->db->order_by('product_distributor.Price','ASC');
				}
				else{
					$this->db->order_by('product_distributor.Price','DESC');
				}
			}
			$query = $this->db->get();
			
			$SponsorDataRet=array();
			foreach ($query->result() as $data)
			{
				$SponsorData=array();
				$SponsorData["Id"]=$data->Id;
				$SponsorData["Name"]=$data->Name;
				$SponsorData["Price"]=$data->Price;
				$SponsorData["Images"]= $this->GetProductImage($data->Id);
				array_push($SponsorDataRet,$SponsorData);
			}
		}
		catch(Exception $ex){

		}

		return $SponsorDataRet;
	}

	public function GetCatalogueItemsBySubCatID($subCategoryId,$orderby,$pageNum)
	{
		try{
			//$PERPAGE_LIMIT = 1;
			$currentPage = 1;
			if(isset($pageNum)){
				$currentPage = $pageNum;
			}
			$startPage = ($currentPage-1)*$GLOBALS['PERPAGE_LIMIT'];
			if($startPage <= 0) $startPage = 1;
			$href = "index.php/home/catalogue?";
			
			$this->db->select('products.Id,products.Name,product_distributor.Price');
			$this->db->from('products');
			$this->db->join('product_distributor','product_distributor.ProductId=products.Id');
			$this->db->where('products.IsActive',0);
			$this->db->where('products.SubCategoryId',$subCategoryId);
			if(isset($orderby)){
				$this->db->order_by('product_distributor.Price',$orderby);
			}
			$this->db->limit($GLOBALS['PERPAGE_LIMIT'],$startPage);
			
			$query = $this->db->get();
			
			$SponsorDataRet=array();
			foreach ($query->result() as $data)
			{
				$SponsorData=array();
				$SponsorData["Id"]=$data->Id;
				$SponsorData["Name"]=$data->Name;
				$SponsorData["Price"]=$data->Price;
				$SponsorData["Images"]= $this->GetProductImage($data->Id);
				array_push($SponsorDataRet,$SponsorData);
			}
			$SponsorDataRet["Pagination"]= $this->paginateResults("SELECT * FROM products WHERE IsActive = 0 AND SubCategoryId = ".$subCategoryId.";","?");
		}
		catch(Exception $ex){

		}

		return $SponsorDataRet;
	}

	public function GetCatalogueItemsBySearch($searchText,$orderby,$pageNum)
	{
		try{
			//$PERPAGE_LIMIT = 1;
			$currentPage = 1;
			if(isset($pageNum)){
				$currentPage = $pageNum;
			}
			$startPage = ($currentPage-1)*$GLOBALS['PERPAGE_LIMIT'];
			if($startPage <= 0) $startPage = 1;
			$href = "index.php/home/catalogue?";
			
			$this->db->select('products.Id,products.Name,product_distributor.Price');
			$this->db->from('products');
			$this->db->join('product_distributor','product_distributor.ProductId=products.Id');
			$this->db->where('products.IsActive',0);
			$this->db->like('products.Name',$searchText);
			//$this->db->where('products.SubCategoryId',$subCategoryId);
			if(isset($orderby)){
				$this->db->order_by('product_distributor.Price',$orderby);
			}
			$this->db->limit($GLOBALS['PERPAGE_LIMIT'],$startPage);
			
			$query = $this->db->get();
			
			$SponsorDataRet=array();
			foreach ($query->result() as $data)
			{
				$SponsorData=array();
				$SponsorData["Id"]=$data->Id;
				$SponsorData["Name"]=$data->Name;
				$SponsorData["Price"]=$data->Price;
				$SponsorData["Images"]= $this->GetProductImage($data->Id);
				array_push($SponsorDataRet,$SponsorData);
			}
			$SponsorDataRet["Pagination"]= $this->paginateResults("SELECT * FROM products WHERE IsActive = 0 AND Name LIKE '%".$searchText."%';","?");
		}
		catch(Exception $ex){

		}

		return $SponsorDataRet;
	}

	function paginateResults($sql, $href) {
		$result  = $this->db->query($sql); //mysql_query($sql);
		$count   = $result->num_rows();
		$page_links = $this->pagination($count, $href,"");
		return $page_links;
	}

	public function GetCatalogueItemsOrderByPrice($orderby,$pageNum)
	{
		try{
			$currentPage = 1;
			/*if(isset($_GET['page'])){
				$currentPage = $_GET['page'];
			}*/

			if(isset($pageNum)){
				$currentPage = $pageNum;
			}

			$startPage = ($currentPage-1)*$GLOBALS['PERPAGE_LIMIT'];
			if($startPage <= 0) $startPage = 1;
			//$href = "index.php/home/catalogue?";

			$this->db->select('products.Id,products.Name,product_distributor.Price');
			$this->db->from('products');
			$this->db->join('product_distributor','product_distributor.ProductId=products.Id');
			$this->db->where('products.IsActive',0);
			if(isset($orderby) && $orderby != ""){
				$this->db->order_by('product_distributor.Price',$orderby);
			}
			$this->db->limit($GLOBALS['PERPAGE_LIMIT'],$startPage);
			$query = $this->db->get();
			
			$SponsorDataRet=array();
			foreach ($query->result() as $data)
			{
				$SponsorData=array();
				$SponsorData["Id"]=$data->Id;
				$SponsorData["Name"]=$data->Name;
				$SponsorData["Price"]=$data->Price;
				$SponsorData["Images"]= $this->GetProductImage($data->Id);
				
				array_push($SponsorDataRet,$SponsorData);
			}
			$SponsorDataRet["Pagination"]= $this->paginateResults("SELECT * FROM products WHERE IsActive = 0;","?");
		}
		catch(Exception $ex){

		}

		return $SponsorDataRet;
	}

	public function GetProductImage($prodId)
	{
		
		$this->db->select('ImageName');
		$this->db->from('productimage');
		$this->db->where('ProductId',$prodId);
		$this->db->limit(1);	
		$query = $this->db->get();
		
		return $query->row();
	}

	public function GetProductImages($prodId)
	{
		
		$this->db->select('ImageName');
		$this->db->from('productimage');
		$this->db->where('ProductId',$prodId);
		$query = $this->db->get();
		
		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData=array();
			$SponsorData["ImageName"]=$data->ImageName;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}
	
	public function GetProductDetails($prodId)
	{
		
		$this->db->select('Key,Value');
		$this->db->from('productdetails');
		$this->db->where('ProductId',$prodId);
		$query = $this->db->get();
		
		$SponsorDataRet=array();
		foreach ($query->result() as $data)
		{
			$SponsorData=array();
			$SponsorData["Key"]=$data->Key;
			$SponsorData["Value"]=$data->Value;
			array_push($SponsorDataRet,$SponsorData);
		}
		
		return $SponsorDataRet;
	}

	public function updateProductViewCount($productId)
	{
		$this->db->where('Id', $productId);
		$this->db->set('ProductViews', 'ProductViews + 1', FALSE);
		$this->db->update('products');
	}
}