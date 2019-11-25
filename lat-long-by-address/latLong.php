<?php
// Initial Address to set here

// reverseAddress() function will return lat long by complete address


$maplatlong="";

	if(isset($_POST['merchantaddress']) && isset($_POST['cityname']) && isset($_POST['statename']) )
	{
        $myplace =$_POST['merchantaddress'].','.$_POST['cityname'].','.$_POST['statename'];
        $completeAdd = str_replace(' ','+',$myplace);
        $result = reverseAddress($completeAdd);
        $maplatlong="";

        if($result['meta']['status']==200)
        {
            $latitude = $result['response']['lat'];
            $longitude = $result['response']['lng'];
            $maplatlong = $latitude.','.$longitude;
            echo $maplatlong;
        }
	}

	
	
	
	
	// ==============================================
	
	
	
	 function reverseAddress($address) {

		$use_curl = false;

		if ($use_curl) {

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "http://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&sensor=true");

			curl_setopt($ch, CURLOPT_HEADER, true);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);

			curl_setopt($ch, CURLOPT_HTTPHEADER, Array (

				"Content-type: application/binary"

			));

			curl_setopt($ch, CURLOPT_POST, 1);

			$response = curl_exec($ch);

			if (curl_errno($ch))

				return -1;



			$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);

			$str = substr($response, $header_size);



			curl_close($ch);



			$data = json_decode($str, true);

			if (isset($data["results"]) && is_array($data["results"])) {

				$latLong = $data["results"][0]["geometry"]["location"];

				$meta = array(

					"status"=>200,

					"message"=>"Succeed."

				);

				return array("meta"=>$meta, "response"=>$latLong);

			} else {

				$meta = array(

					"status"=>406,

					"message"=>"Address is not known."

				);

				return array("meta"=>$meta);

			}

		} else {

			$str = @file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&sensor=true");

			$data = json_decode($str, true);

			if (isset($data["results"]) && is_array($data["results"])) {

				$latLong = @$data["results"][0]["geometry"]["location"];

				$meta = array(

					"status"=>200,

					"message"=>"Succeed."

				);

				return array("meta"=>$meta, "response"=>$latLong);

			} else {

				$meta = array(

					"status"=>406,

					"message"=>"Address is not known."

				);

				return array("meta"=>$meta);

			}

		}

	}
	
	?>