<!DOCTYPE html>
<html>
<body>
<?php
class Movie {
	private $name;
	private $rating;
	private $creation_date;
	private $review;
	public function __construct($name, $rating, $creation_date, $review){
		$this->name = $name;
		$this->rating = $rating;
		$this->creation_date = $creation_date;
		$this->review = $review;
	}
	public function getName(){
		return $this->name;
	}
	public function getRating(){
		return $this->rating;
	}
	public function getCreation_date(){
		return $this->creation_date;
	}
	public function getReview(){
		return $this->review;
	}
}

$url = "https://github.com/Ambarov/reviews2.0/blob/main/reviews.json";
$json = '[
  {
    "id": 2097047,
    "reviewId": "93f131be27dc1122bb7ef0048ad10e4f",
    "reviewFullText": "5 star review",
    "reviewText": "5 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 5,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T13:00:35+00:00",
    "reviewCreatedOnTime": 1611579635,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #20",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097046,
    "reviewId": "6e7bd4c71a56885ef583bd79186af689",
    "reviewFullText": "4 star review",
    "reviewText": "4 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 4,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T13:00:21+00:00",
    "reviewCreatedOnTime": 1611579621,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #19",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097045,
    "reviewId": "ced8bd056d0adec93c651f935c7dde80",
    "reviewFullText": "3 star review",
    "reviewText": "3 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 3,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T13:00:10+00:00",
    "reviewCreatedOnTime": 1611579610,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #18",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097044,
    "reviewId": "b0dfee9017fafe7d751f0fea1f3ce540",
    "reviewFullText": "2 star review",
    "reviewText": "2 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 2,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:59:57+00:00",
    "reviewCreatedOnTime": 1611579597,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #17",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097043,
    "reviewId": "10588b914a39967f3a702b02f3751794",
    "reviewFullText": "1 star review",
    "reviewText": "1 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 1,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:59:40+00:00",
    "reviewCreatedOnTime": 1611579580,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #16",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097042,
    "reviewId": "1d14901bbb67ded3368d2d8d8b5989d8",
    "reviewFullText": "5 star review",
    "reviewText": "5 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 5,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:59:27+00:00",
    "reviewCreatedOnTime": 1611579567,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #15",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097041,
    "reviewId": "ca10718af15af32f71da09a6e5f78c48",
    "reviewFullText": "",
    "reviewText": "",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 4,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:59:15+00:00",
    "reviewCreatedOnTime": 1611579555,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #14",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097040,
    "reviewId": "65b3ba7d67109d2a4f573fca44d5e532",
    "reviewFullText": "3 star review",
    "reviewText": "3 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 3,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:58:46+00:00",
    "reviewCreatedOnTime": 1611579526,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #13",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097039,
    "reviewId": "c111f4f05a1048e3a43a28e5bfd0be27",
    "reviewFullText": "",
    "reviewText": "",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 2,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:58:22+00:00",
    "reviewCreatedOnTime": 1611579502,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #12",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097038,
    "reviewId": "be88045286fcb7ca91e234b37eef511b",
    "reviewFullText": "1 star review",
    "reviewText": "1 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 1,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:58:06+00:00",
    "reviewCreatedOnTime": 1611579486,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #11",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097037,
    "reviewId": "70b57c0433d0221b0788b106fb9fdd5a",
    "reviewFullText": "",
    "reviewText": "",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 5,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:57:48+00:00",
    "reviewCreatedOnTime": 1611579468,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #10",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097036,
    "reviewId": "59cbd1e887e8cce76ef68318b198ddf0",
    "reviewFullText": "4 star review",
    "reviewText": "4 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 4,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:57:35+00:00",
    "reviewCreatedOnTime": 1611579455,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #9",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097034,
    "reviewId": "ac50da2870193abe25ba529597cfbd23",
    "reviewFullText": "",
    "reviewText": "",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 3,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:57:11+00:00",
    "reviewCreatedOnTime": 1611579431,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #8",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097032,
    "reviewId": "f0c8bdd06d6c4ec35de765657e118602",
    "reviewFullText": "2 star review",
    "reviewText": "2 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 2,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:56:55+00:00",
    "reviewCreatedOnTime": 1611579415,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #7",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097031,
    "reviewId": "ef2ad7498e260ec9462d0f27801c86b3",
    "reviewFullText": "",
    "reviewText": "",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 1,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:56:34+00:00",
    "reviewCreatedOnTime": 1611579394,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #6",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097030,
    "reviewId": "d55229232defac9397fc6f12550d4f1f",
    "reviewFullText": "5 star review",
    "reviewText": "5 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 5,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:56:17+00:00",
    "reviewCreatedOnTime": 1611579377,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #5",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097029,
    "reviewId": "3a6dd5070788c36f28c4f78eb349c248",
    "reviewFullText": "4 star review",
    "reviewText": "4 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 4,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:55:57+00:00",
    "reviewCreatedOnTime": 1611579357,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #4",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097028,
    "reviewId": "01223a92f8823251b9678720def5ff43",
    "reviewFullText": "3 star review",
    "reviewText": "3 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 3,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:55:40+00:00",
    "reviewCreatedOnTime": 1611579340,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #3",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097027,
    "reviewId": "5b8c2de55dbb5ccf9f8d033c1859b559",
    "reviewFullText": "2 star review",
    "reviewText": "2 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 2,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:55:21+00:00",
    "reviewCreatedOnTime": 1611579321,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #2",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  },
  {
    "id": 2097026,
    "reviewId": "691d4d278dc23aa9a478e078b9382c2a",
    "reviewFullText": "1 star review",
    "reviewText": "1 star review",
    "numLikes": 0,
    "numComments": 0,
    "numShares": 0,
    "rating": 1,
    "reviewCreatedOn": "2 months ago",
    "reviewCreatedOnDate": "2021-01-25T12:55:06+00:00",
    "reviewCreatedOnTime": 1611579306,
    "reviewerId": null,
    "reviewerUrl": null,
    "reviewerName": "Reviewer #1",
    "reviewerEmail": null,
    "sourceType": "custom",
    "isVerified": false,
    "source": "custom",
    "sourceName": "1-20 Reviews",
    "sourceId": "890cdd7974cdf8aabe6e9051f5a87303bdb933ae",
    "tags": [],
    "href": null,
    "logoHref": null,
    "photos": []
  }
]
';
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$selectOption = $_POST['rating'];
		$minimumRating = $_POST['minimum'];
		$dateOrder = $_POST['date'];
		$prioritize = $_POST['prioritize'];
	}
	else {
		$selectOption = 'high';
		$minimumRating = 'low';
		$dateOrder = 'oldest';
		$prioritize = 'yes';
	}
	$array = array();
	$reviews = json_decode($json, true);
	foreach($reviews as $review){
	$movie = new Movie($review['id'], $review['rating'], $review['reviewCreatedOnDate'], $review['reviewFullText']);
	$array[] = $movie;
}
	$filtered_reviews = array_filter($array, function($data){
		if(!isset($_POST['minimum'])){
			$value = 1;
		}
		else {
			$value = $_POST['minimum'];
		}
		debug_to_console($value);
		return $data->getRating() >= (int) $value;
	});
	
	
		function sortByRating($a, $b){
			global $selectOption;
			if (!isset($_POST['date'])) {
				$dateOrder = 'oldest';
			}
			else {
				$dateOrder = $_POST['date'];
			}
			debug_to_console($dateOrder);
			if($a->getRating() == $b->getRating()){
				if($dateOrder === 'oldest') {
					if (strtotime($a->getCreation_date()) > strtotime($b->getCreation_date())) { // oldest first
						return 1;
					}
				}
				else if ($dateOrder === 'newest') {
					if (strtotime($a->getCreation_date()) < strtotime($b->getCreation_date())) { // newest first
						return 1;
				}
			}
		}
		if($selectOption === 'high'){
		return $a->getRating() < $b->getRating() ? 1 : -1;
		}
		else
		{
		return $a->getRating() > $b->getRating() ? 1 : -1;
		}
		}
		usort($filtered_reviews, 'sortByRating');
	
	function debug_to_console($data){ //function to help me debug in the console
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);
		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
	debug_to_console($selectOption);
	if($prioritize === 'yes'){
		$text_filtered_reviews = array_filter($filtered_reviews, function($data){ // function to filter out the reviews without text
			return !empty($data->getReview()); // only get the ones where reviewText is not null
		});
		$no_text_filtered_reviews = array_filter($filtered_reviews, function($data) {
			return empty($data->getReview());
		});
		$filtered_reviews  = array_merge($text_filtered_reviews, $no_text_filtered_reviews); // merge both arrays
	}
?>
<h2>Filter reviews</h2>
<form action="reviews2.php" method="post">
	<label for="rating">Order by rating:</label>
	<select id="rating" name="rating">
		<option value="high" <?php echo (isset($_POST['rating']) && $_POST['rating'] == "high") ? 'selected' : ''; ?>>Highest first</option>
		<option value ="low" <?php echo (isset($_POST['rating']) && $_POST['rating'] == "low") ? 'selected' : ''; ?>>Lowest first</option>
	</select>
	<br></br>
	<label for="minimum">Minimum rating:</label>
	<select id="minimum" name="minimum">
		<option value="1" <?php echo (isset($_POST['minimum']) && $_POST['minimum'] == "1") ? 'selected' : ''; ?>>1</option>
		<option value="2" <?php echo (isset($_POST['minimum']) && $_POST['minimum'] == "2") ? 'selected' : ''; ?>>2</option>
		<option value="3" <?php echo (isset($_POST['minimum']) && $_POST['minimum'] == "3") ? 'selected' : ''; ?>>3</option>
		<option value="4" <?php echo (isset($_POST['minimum']) && $_POST['minimum'] == "4") ? 'selected' : ''; ?>>4</option>
		<option value="5" <?php echo (isset($_POST['minimum']) && $_POST['minimum'] == "5") ? 'selected' : ''; ?>>5</option>
	</select>
	<br></br>
	<label for="date">Order by date:</label>
	<select id="date" name="date">
		<option value="oldest" <?php echo (isset($_POST['date']) && $_POST['date'] == "oldest") ? 'selected' : ''; ?>>Oldest first</option>
		<option value="newest" <?php echo (isset($_POST['date']) && $_POST['date'] == "newest") ? 'selected' : ''; ?>>Newest first</option>
	</select>
	<br></br>
	<label for="prioritize">Prioritize by text:</label>
	<select id="prioritize" name="prioritize">
		<option value="yes" <?php echo (isset($_POST['prioritize']) && $_POST['prioritize'] == "yes") ? 'selected' : ''; ?>>Yes</option>
		<option value="no" <?php echo (isset($_POST['prioritize']) && $_POST['prioritize'] == "no") ? 'selected' : ''; ?>>No</option>
	</select>
	<br></br>
	<input type="submit" value="Filter">
	<table>
	<thead>
	<tr>
	<th>Name</th>
	<th>rating</th>
	<th>date</th>
	<th>review</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($filtered_reviews  as $row) : ?>
	<tr>
	<td><?= $row->getName(); ?></td>
	<td><?= $row->getRating(); ?></td>
	<td><?= $row->getCreation_date(); ?></td>
	<td><?= $row->getReview(); ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
</form>
</body>
</html>