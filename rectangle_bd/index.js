const deleteElts = document.querySelectorAll(".delete");
const editElts = document.querySelectorAll(".edit");

deleteElts.forEach((elts) => {
  elts.addEventListener("click", (e) => {
    if (confirm("suprimmer ?")) {
      window.location.replace(
        `${window.location.href}&annule=${true}&id=${elts.id}`
      );
    } else {
      window.location.replace("index.php");
    }
  });
});

editElts.forEach((elts) => {
  elts.addEventListener("click", (e) => {
    window.location.replace(`${window.location.href}?editId=${elts.id}`);
  });
});
