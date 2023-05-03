function app() {
  console.log("ciao");
  document.getElementById("wallTextTpl").addEventListener("click", () => {
    console.log("ciao");

    const walltext =
      "Lorem ipsum dolor sit mammt consectetur adipisicing elit. Nostrum mammt facilis atque temporibus mammt! Illo corporis mammt laborum accusantium mammt.";
    navigator.clipboard.writeText(walltext);
    alert("Copied the text: " + walltext);
  });
}
app();
