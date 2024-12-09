<?php 
$servername ="localhost";
$username = "urginzgu_root";
$password = "123321@Aa";
$dbname = "urginzgu_root";

//khoi tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);

//kiem tra ket noi
if($conn->connect_error){
    die("ket noi that bai" . $conn->connect_error);
}
$sql = "SELECT  idtheloai, tentheloai FROM theloai";
$result = $conn->query($sql);
if ($result->num_rows ==0) {
   echo "khong co du lieu datatable ";
}
// Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8MB4'");
?>
<!-- Footer -->
<footer class="text-center text-lg-start bg-opacity-50 bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Thông tin liên hệ của chúng tôi:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOdJREFUSEvt1CFOQ0EQxvFfBSHoguEIxSEqMBgOQELKDUpAYlA1FXgcTbB1xRBsBQJLD1ASJCS0VyCBl4xompLNvryXVHTVZHfn+8/O7ExDzatRs761AxzgFm3s4hND9P7LRM4L9vGB7SWxR3SqANzjcoXQCOdVAN5wGEIvOMFP6pPkpOgbeyF4hUFKvDjPAczRDNELPFQBKHLbCqEb7IT9jEnYrxiXrUHxQ84SkV7jrk7AKZ7KAvo4DuejvybbCnuKr7C7eC8LWPSbRfcWe5UVeQPIarRNDZKTpfYUJSNYdSFnmq4n4BdfByoZ/9M5/QAAAABJRU5ErkJggg=="/></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZtJREFUSEvd1b1rFVEQBfBfNKAQsYqFoBiFIEIUESstlYAhYJQQIoJFLETsFUXxD9DGQrERCdjYWAiBFDYS0gQFxRSpEhIQBbESwS9I7sA+WNbdzb4Hr8nt9s6dc+6cO3O2R5dXT5fxbT2CPvzcRLbduI9RHMRfPMYd7MX57Hs9cPISbcciJvCphuQNzpTE17Afl/CyFc8TDGAF33AB8yUgJ/C+hvwd3uIFPhQr2Ikf6M0AnuEevuQAL2fJVRwh740k3XRZBbEXtz5VyJ7DayzgOB7VVPAcU/l4XqJdOIxZ9Hc4Hw9ws4pgH1bxPXXBng4JQp4nVQTbsIwDHYJH2hEsVRHE/sWsxVoP3Q5XdOChYkKZVcQc3MXRdtBxHU+bEIxgpk3wGLLBNM1/mhDEmejjKw1J/uF01sb/pVS5aTz4EG6nR5usIQq/uZoaI/q/dJURhOGdxC2cqwH/hZjsV3WV5gnO4mFKOFYwwbL8GMZraWpD+9pVrCCseDwZ1RiGsSPJ9Btf8RnhpHHjj5sBt+Jb74/WtPLG57ou0QbqWz0ZBzSqswAAAABJRU5ErkJggg=="/></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcFJREFUSEvV1UuoT1EUBvDfHXiFDExNJEVEDLwiQ24yFMoAI0OUMpABSQqZGl0Tr+7g3iRGSmFgpAghJSZIEQnldZbOrd129v+/u3WLXadTZ317fWt9e+3vDJjgNTDB+f0TBMuxASuxhj9FPcZTXMVoLxV6dTAZJ7C3j4y3sQWvu3AlgoUYbp5FlWcUhRysJZiK+5jfseEJvmMeAhfrInbgZy3BaexLwN9wDGfxtv0+qUl4GNHpVvwodZpLtB43E/AnLMPzSqn+guUEF7A9Qe3G0HiTx76c4C5WtAk/YlaWfFozrtf7EB7FjTFMTvAOs9tgjN+6LNkMhGy91gGcLBG8wpw2eAdrx0EQA3KmRHAFm9vgF0zHr4SkS6LoeHGC2dZM1+USQeh3KAHvwrk+kpzC/gQzFy9KBBF8lFyiD1iKlwWSJYizmtnGH2bddLppXPnjScL3TUU7EfKNrfCpPTiSTVqM+KW0mC4vilt6r8OHguhZMyExSWEVU7KurmFT3mnJ7BY00ow01cS7Zt3CID7XEgQuZAip0gPM939FeFf4Uqcf1fzRwos2YjVWtbf/QfuzOY83vVqsIaiRqIj5/wl+A2MwRxkhHnjuAAAAAElFTkSuQmCC"/></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjNJREFUSEvF1UnITWEYB/DfhyLCRlamQiEJkSQskFJfMmS2sTEsFBmKLJTIELKyYCF9hoxRSuykJJIyJpKyYUVW5vfRe+t0Oqd7U7fvrds95x2e///5/5/nPR3aPDraHF+3AYzEVszEeGqJ/MEz3MNxvCkrUpXBBpxAL3zAA7yqkXIyJmIofmATThX3lgGm5IAvsAhvW/QosryBYZiKJ41zZYCrWIAxeN9C8LVJvr34krJdh0cpo+tYUgcQQYN9gBRHD8zDOPzCS9zNc7ezlMMzwCCMqAP4ii5sLEQPfS9iegk0jD2ddP+EwTiDUGA++tUB/MYR7Mgbgvn9zGgb7qBnZn4oV80sRDXFCCJL855/E2UPYuMB7MoHluVD8X+plMHy5NWFZOjCbHAsn0/yxXwQqwUIZjvzejxvR398KwGE1p9TOe9LvuzJayHvqiLxqgyiYbbkAwezXANT44U/xdEA2J96YHdeOIs1zQCO5S6OM1Ful7OuV0oAwTQYFyWK9xXNPChm0DA5SjCkCpOjw+emSjmM15hdMjkA+9R5EDoHi/UFtkOymTMqynQlPhbmo0znICStNDkuq/hVNVow60wV9h23cLPAvBHvMQYkkqPrAIL94lSaY1u8KopJTUj311OcSyRX1wFMSiyDRWwMg9+VZKl7jeDXEF5NyzEqJYrJxnUdBj/MksT8TzxPjdgbo7LZMd8XcQvH+macLLKo+6L9zwfnaNX13m2fzBalb76t7Rn8BcJ+cxlsKeBhAAAAAElFTkSuQmCC"/></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASxJREFUSEvl1TsvBFEYh/HfCp2Igso3oNXoKFQKIa6hk/AtJD6GS4m4h0InLo1G7xPoRKUl7Elem81erZndxlQzOe88z5z/Oe+cgjZfhTbzdVxwh/GMs7rHxA+jcgZfGeFV3EaC66ie+oO0xK0nOMBqgA+x3KKkqWAX6wHdw1regnfsowsr6M1b8IrngA5jsLgzHuJ5CP3YxgdGMFfxAU0jOsZSvHSERUo9M4MnvJRBN4vjW2XPTQUnAU3vJNlCxFVvG3fjDX0hySTowRVGQ5waK12PGMtDkLr0NkA72Ij7S0znIUhrcBGgWlGmoaYRncb0U3GCzCPl/IlZnIfgLMbK6/6JoFGjDURzpShq1f0qohb/DFXldRc5jwPnBpM/yo4fmVmjqZ9V7uQAfgNR+VIZag7oTQAAAABJRU5ErkJggg=="/></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjBJREFUSEu11UnIjlEUB/DfJ7IhCyRZosxFslCKKGFjKEOKEjKlJGOJZAglkiHsCCXDhh0LC5SIjEWysDAkC1KIPOfrvnW/53uHx+I7m/e99/7P/Z9z7jn/p00XW1sX368VQQ/MxgyMxlDafd7hCW4W+1fwu1GgzQim4SSGtMjyLVbiVj1cI4It2J+irVLFv9iKQ2VwPYLNOFDl1jqYDTiS75cJpqRUYz/quwyrsQPd8CbVezgi6n04gWOYl/Ym4W6NJCfoiecYnA53Y2f6H+/wEd/SuhcG4nVab8fe9P8FxhRB/Yl1TrAAl7L0ItVIuYodxKYMOCtVoAPB+SKixRloIu5VuT1F/DgL+DjWlTOI8ozI0hxZ8fIa7CHGpcWDIoMJZYJP6J8A14tBmvOfBBewKPl8Qb8ywYdisAYkwG1M/U+CG5iZfL6jd5ngEcYmQHRL32YSUCIPSfmMPmn/FaKVOzzyGSzPHFfgbMUsAns6w57DkjJB1PwqviJSjD6P8Q89+tGAKOZhbRq4GMSazcflMkHMRHTSoKI9p2MVluJX6umF+JluiJJcS7juJfKXGJWmupNcz03y+x7j0+BNTlmsKV10EUFatqhEdGG71RO7o1if9GdPkzfYlUlJDXa4kJONuU8juQ5xCy26U4jYUzzDqRJZnAeuZqHCleS65hCqGHoU0xnyHQ+eWyjpNtxPmhW/nazVJzPO45MZMh2Z5DYs9Xo8dkNrRdDMt9JZlxP8A6W4YxlKv0WFAAAAAElFTkSuQmCC"/></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 "  >
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Công ty 30 thành viên
          </h6>
          <p>
            công ty không có lương
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            ngôn ngữ
          </h6>
          <p>
            <a href="#!" class="text-reset">VI-Tiếng việt</a>
          </p>
          <p>
            <a href="#!" class="text-reset">ENG-English</a>
          </p>
          <p>
            <a href="#!" class="text-reset">KR-Korean</a>
          </p>
          <p>
            <a href="#!" class="text-reset">JP-Japanese</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            thể loại
          </h6>
       
          <?php
        while($row = $result->fetch_assoc()){
          ?>
            <p><a class="dropdown-item" href="theloai.php?matheloai=<?php echo $row["idtheloai"] ?>"><?php 
            mysqli_query($conn, "SET NAMES 'UTF8'");
            echo $row["tentheloai"]  ?></a></p>
                <?php
                }
                mysqli_query($conn, "SET NAMES 'UTF8'");
            
                ?>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Liên hệ</h6>
          <p><i class="fas fa-home me-3"></i> Hà Nội, Đường Trịnh Văn Bô - Nam Từ Liêm , VN</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            yaquafa@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +84 0562044109</p>
          <p><i class="fas fa-print me-3"></i> +84 0357561200</p>
          <p><i class="fas fa-print me-3"></i> +84 0342530842</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(1,1,1,0.3);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->