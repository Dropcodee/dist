const users = [
  {
    userDetails: {
      name: "Abraham Ugbeshe",
      webmail: "ugbeshe.abraham@lmu.edu.ng",
      reg_no: "1700172"
    }
  }
];
const ago = date => {
  var time = new Date().toLocaleString(date);
  console.log(time)
}
ago()
$(() => {
  $.get("http://localhost:8080/projects/sanc-server/public/users", data => {
    var user_data = jQuery.parseJSON(data);
    console.log(user_data);
    var output = '';
    user_data.forEach((users, index) => {
      output += `
      <tr key=${index}>
      <td>${users.id}</td>
      <td>${users.name}</td>
      <td>${users.reg_no}</td>
      <td>${users.webmail}</td>
      <td>${users.dob}</td>
      <td>${users.hall}</td>
      <td>${users.room}</td>
      <td>${users.membership}</td>
      <td>${users.ago}</td>
      </tr>
           `;
    });
    $("#show").html(output);
  });
  console.log(users);
  $("#name").append(users[0].userDetails.name);
  $("#email").html(users[0].userDetails.webmail);
});
