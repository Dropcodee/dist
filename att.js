$(() => {
  $("#add").click(e => {
    e.preventDefault();
    var reg_no = $("#reg-no").val();
    var regex = /[0-9]/;
    var point = 0;
    var estimated = 500;
    if (reg_no !== "") {
      if (reg_no.length === 7) {
        if (regex.test(reg_no)) {
          $.post(
            "http://localhost:8080/projects/sanc-server/public/attendance",
            { reg_no: reg_no },
            function(response) {
              var att = jQuery.parseJSON(response);
              $(".reg_err")
                .html("")
                .removeClass("red-text");
              if (att.error) {
                $(".reg_err")
                  .html(att.error.err_text)
                  .addClass("red-text");
              } else {
                $.get(
                  `http://localhost:8080/projects/sanc-server/public/attendance/${reg_no}`,
                  function(response) {
                    var att = jQuery.parseJSON(response);
                    point = att[0].attendance;
                    if (point <= 500) {
                      var cal = point / estimated;
                      var total = cal * 100;
                      M.toast({
                        html: `${att[0].name} attendance percentage added ${total}%`,
                        classes: "toast__sending"
                      });
                      console.log(
                        `${att[0].name} attendance percentage is ${total}%`
                      );
                    } else {
                      M.toast({
                        html: `${att[0].name} percentage has reached max`,
                        classes: "toast__sending"
                      });
                    }
                  }
                );
              }
            }
          );
        } else {
          $(".reg_err")
            .html("Enter a valid reg no.")
            .addClass("red-text");
        }
      } else {
        $(".reg_err")
          .html("Enter a valid reg no. length")
          .addClass("red-text");
      }
    } else {
      $(".reg_err")
        .html("Reg number required")
        .addClass("red-text");
      console.log("Reg number required");
    }
  });
});
