
    // Theme toggle with localStorage
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
      body.classList.add("dark-mode");
      themeToggle.textContent = "☀️";
    }

    themeToggle.addEventListener("click", () => {
      body.classList.toggle("dark-mode");
      if (body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
        themeToggle.textContent = "☀️";
      } else {
        localStorage.setItem("theme", "light");
        themeToggle.textContent = "🌙";
      }
    });
function showTable(id) {
  const allTables = document.querySelectorAll('.data-table');
  allTables.forEach(t => t.classList.add('hidden'));

  const target = document.getElementById(id);
  if (target) target.classList.remove('hidden');

  // Switch active button styles
  const btnGroups = target.closest('.report-section').querySelectorAll('.tab-btn');
  btnGroups.forEach(btn => btn.classList.remove('active'));

  const btnIndex = id.split('-')[1]; // daily, weekly...
  btnGroups.forEach(btn => {
    if (btn.textContent.toLowerCase() === btnIndex) {
      btn.classList.add('active');
    }
  });
}
function toggleDarkMode() {
  document.body.classList.toggle("dark-mode");
}
if (savedTheme === "dark") {
  body.classList.add("dark-mode");
  themeToggle.textContent = "☀️";
}