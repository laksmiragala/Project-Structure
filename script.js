function generateAI() {
  const shortDesc = document.querySelector("textarea[name='short_description']").value;

  fetch("generate_ai.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "short_description=" + encodeURIComponent(shortDesc)
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("description").value = data;
  });
}
