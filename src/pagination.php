<?php
function studentspagination($query, $per_page ,$page = 1, $url = '?')
{


    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($con->error) {
        $error = "An Error occurred ";
        $con_error = $con->error;
        $error = base64_encode($error . $con_error);
        header("location:viewBlog.php?error_msg=$error");
    }

    $query = "SELECT COUNT(*) as `num` FROM {$query}";
    $query_result = mysqli_query($con, $query);

    if (mysqli_num_rows($query_result) > 0) {
        while ($row2 = mysqli_fetch_assoc($query_result)) {
            $total = $row2['num'];
            $adjacents = "2";

            $page = ($page == 0 ? 1 : $page);
            $start = ($page - 1) * $per_page;

            $prev = $page - 1;
            $next = $page + 1;
            $lastpage = ceil($total / $per_page);
            $lpm1 = $lastpage - 1;

            $pagination = "";
            if ($lastpage > 1) {
                $pagination .= "<ul class='pagination'>";
                $pagination .= "<li class=' pagination-link--wide first' >Page $page of $lastpage</li>";
                if ($lastpage < 5 + ($adjacents * 2)) {
                    for ($counter = 1; $counter <= $lastpage; $counter++) {
                        if ($counter == $page)
                            $pagination .= "<li class='pagination-item is-active'><a class='pagination-link '>$counter</a></li>";
                        else
                            $pagination .= "<li class='pagination-item' ><a class='pagination-link' href='{$url}link=view&page=$counter'>$counter</a></li>";
                    }
                } elseif ($lastpage > 5 + ($adjacents * 2)) {
                    if ($page < 1 + ($adjacents * 2)) {
                        for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                            if ($counter == $page)
                                $pagination .= "<li class='pagination-item'><a class=\"pagination-link is-active\">$counter</a></li>";
                            else
                                $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}page=$counter'>$counter</a></li>";
                        }
                        $pagination .= "<li class='dot'>...</li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$lpm1'>$lpm1</a></li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$lastpage'>$lastpage</a></li>";
                    } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=1'>1</a></li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=2'>2</a></li>";
                        $pagination .= "<li class='dot'>...</li>";
                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                            if ($counter == $page)
                                $pagination .= "<li class='pagination-item is-active'><a class='pagination-link'>$counter</a></li>";
                            else
                                $pagination .= "<li class='pagination-item'><a href='{$url}link=view&page=$counter'>$counter</a></li>";
                        }
                        $pagination .= "<li class='dot'>..</li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$lpm1'>$lpm1</a></li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$lastpage'>$lastpage</a></li>";
                    } else {
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=1'>1</a></li>";
                        $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=2'>2</a></li>";
                        $pagination .= "<li class='dot'>..</li>";
                        for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                            if ($counter == $page)
                                $pagination .= "<li class='pagination-item is-active'><a class='pagination-link>$counter</a></li>";
                            else
                                $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$counter'>$counter</a></li>";
                        }
                    }
                }

                if ($page < $counter - 1) {
                    $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$next'>Next</a></li>";
                    $pagination .= "<li class='pagination-item'><a class='pagination-link' href='{$url}link=view&page=$lastpage'>Last</a></li>";
                } else {
                    $pagination .= "<li class='pagination-item is-active'><a class='pagination-link--wide'>Next</a></li>";
                    $pagination .= "<li class='pagination-item--wide last'>
                        <a class='pagination-link--wide last'>Last</a></li>";
                }
                $pagination .= "</ul>\n";
            }


            return $pagination;
        }
    }
}
?>