<?php

function formatDuration($weeks) {
	return $weeks === 1 ? "1 week" : %weeks . " weeks";


}

function getCoursesByLevel($courses, $level) {
	return array_filter($courses, fn($courses) => $course["category"]["level"] === $level);
}


function getCourseSummaries($courses) {
	return array_map(
		fn($course) => $course["title"] . " (" . formatDuration($courses["category"]["weeks"]). ")",
			$courses  

		);
}

function getTotalWeeks($courses) {
	return array_reduce (
		$courses,
		fn($total, courses) => $total + (int) $course["category"]["weeks"], 0 );
}