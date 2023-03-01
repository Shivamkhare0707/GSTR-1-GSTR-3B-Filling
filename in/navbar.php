<section id="content">

	<!-- NAVBAR -->
	<nav>
		<i class='bx bx-menu'></i>
		<form action="client.php" method="post" style="margin-bottom: 3%; height: fit-content;">
			<div class="form-input">
				<input type="text" name="search" id="search" placeholder="Search data" autocomplete="off" required>
				<button type="submit" name="submit" class="search-btn" value="search"><i class='bx bx-search'></i></button>
			</div>
		</form>
		<input type="checkbox" id="switch-mode" hidden>
		<label for="switch-mode" class="switch-mode"></label>

		<!-- Bell Icon -->
		<a href="#" class="notification">
			<i class='bx bxs-bell'></i>
		</a>

		<!--Message-->
		<a href="" class="message">
			<i class='bx bxs-message-dots'></i>
		</a>
	</nav>
	<!-- NAVBAR -->
</section>

<script>
	$(document).ready(function () {
    // Send Search Text to the server
    $("#search").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "global_search/action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list").html(response);
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });
</script>