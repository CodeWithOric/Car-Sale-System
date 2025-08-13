//all mapping//
const buttonTableMap = {
    hisBtn: {
        table: 'hisTable',
        title: 'hisTitle',
    },
    perBtn: {
        table: 'performanceTable',
        title: 'performanceTitle',
    },
    
};
  //function show only selected//
  function showOnly(tableId, titleId)
  {
    Object.values(buttonTableMap).forEach(({table, title})=>{
        document.getElementById(table).classList.add('hidden');  
        document.getElementById(title).classList.add('hidden');
     //document.getElementById(form).classList.add('hidden'); //
      });
        //show selected
        document.getElementById(tableId).classList.remove('hidden');  
        document.getElementById(titleId).classList.remove('hidden');
        // document.getElementById(form).classList.remove('hidden');
  }
  //listeners dynamically
  Object.keys(buttonTableMap).forEach(buttonId=>{
    const {table, title, } = buttonTableMap[buttonId];

    document.getElementById(buttonId).addEventListener('click' ,() =>{
        showOnly(table, title);
    });
  });
//popup menu
 document.querySelectorAll('.action-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation(); // prevent closing immediately

      // hide other menus
      document.querySelectorAll('.action-menu').forEach(menu => {
        menu.classList.add('hidden');
      });

      // toggle this one
      const menu = btn.nextElementSibling;
      if (menu && menu.classList.contains('action-menu')) {
        menu.classList.toggle('hidden');
      }
    });
  });

  // Hide on outside click
 

  const getTextColor = () => document.body.classList.contains("dark-mode") ? "#eee" : "#222";


const monthlyData = {
  Jan: 10,
  Feb: 20,
  Mar: 30,
  Apr: 25,
  May: 40,
  Jun: 35,
  Jul: 50
};

// Draw the chart
const ctx = document.getElementById("ordersChart").getContext("2d");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: Object.keys(monthlyData),
    datasets: [{
      label: "Orders",
      data: Object.values(monthlyData),
      backgroundColor: "#5c4253ff"
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    },
    orders: {
      y: {
        beginAtZero: true,
        ticks: { stepSize: 10 }
      }
    }
  }
});
//button change
document.addEventListener("DOMContentLoaded", function () {
  const button1 = document.getElementById("orderanBtn");
  const button2 = document.getElementById("perBtn");
  const button3 = document.getElementById("detBtn");
  const button4 = document.getElementById("hisBtn");

  button1.addEventListener("click", function () {
    hideAll();
    show("anatitle");
    show("analytics");
    show("cartsb");
  });

  button2.addEventListener("click", function () {
    hideAll();
    show("performanceTitle");
    show("performanceTable");
  });

  button3.addEventListener("click", function () {
    hideAll(); // show nothing
  });

  button4.addEventListener("click", function () {
    hideAll();
    show("hisTitle");
    show("hisTable");
  });

  function hideAll() {
    const all = [
      "anatitle", "analytics", "cartsb",
      "performanceTitle", "performanceTable",
      "hisTitle", "hisTable"
    ];
    all.forEach(id => {
      const el = document.getElementById(id);
      if (el) el.classList.add("hidden");
    });
  }

  function show(id) {
    const el = document.getElementById(id);
    if (el) el.classList.remove("hidden");
  }
});









  

