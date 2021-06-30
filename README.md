# PHP-rating-system-rating-calculate
PHP rating system / rating calculate

Total: SELECT COUNT(rating) as totalRating FROM review<br>
Average: SELECT AVG(rating) as avgRating FROM review<br>
Star Calculation Percentage (oneStarCount): SELECT COUNT(rating) as oneStarRating FROM review WHERE rating = "1" AND status = "1"<br>
percentage = @round((oneStarCount / totalRating) * 100);
