$(document).ready(function () {
  $("form").submit(function () {
    if (!confirm("結果を発表します！本当によろしいですか・・・？")) {
      return false;
    }
  });
});
