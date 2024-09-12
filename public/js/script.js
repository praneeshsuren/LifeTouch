// Select all menu items
const body = document.querySelector('body');
const menuItems = document.querySelectorAll('.menu ul li a');
const menuButton = document.querySelector('.menu-btn');
const modeSwitch = document.querySelector('.toggle-switch');
const modeText = document.querySelector('.mode-text');
// Function to remove the active class from all items
function removeActiveClass() {
    menuItems.forEach(item => {
        item.parentElement.classList.remove('active');
    });
}

// Add click event listener to each menu item
menuItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remove the active class from all items
        removeActiveClass();

        // Add the active class to the clicked item
        item.parentElement.classList.add('active');
        
        // Toggle sub-menu if it exists
        const subMenu = item.nextElementSibling;
        if (subMenu && subMenu.classList.contains('sub-menu')) {
            
            subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
        }

        const arrow = item.querySelector('.arrow');
        if (arrow) {
            arrow.classList.toggle('active');
        }
    });
});

menuButton.addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
});

modeSwitch.addEventListener('click', () => {
    body.classList.toggle('dark');

    if(body.classList.contains('dark')) {
      modeText.innerText = 'Light Mode';
    }else{
        modeText.innerText = 'Dark Mode';
    }
});

// Area Chart with ApexCharts for Busy Hours

var options = {
    chart: {
    type: 'area',
    height: 350,
    toolbar: {
        show: false
    }
    },
    series: [{
    name: 'Number of Members',
    data: generateHourlyData(18) // Data for 17 hours (5 AM to 10 PM)
    }],
    xaxis: {
    type: 'category',
    categories: generateTimeRangeLabels(5, 23), // Time labels from 5 AM to 10 PM
    title: {
        text: 'Time (Working Hours)'
    }
    },
    yaxis: {
    title: {
        text: 'Number of Members'
    }
    },
    colors: ['#695CFE'],
    fill: {
    type: 'gradient',
    gradient: {
        shadeIntensity: 1,
        opacityFrom: 0.7,
        opacityTo: 0.9,
        stops: [0, 100]
    }
    },
    dataLabels: {
    enabled: false
    },
    stroke: {
    curve: 'smooth'
    },
    grid: {
    borderColor: '#f1f1f1'
    }
};

var chart = new ApexCharts(document.querySelector("#areaChart"), options);
chart.render();

// Helper Function to generate random data for 17 hours (5 AM to 10 PM)
function generateHourlyData(hours) {
    const data = [];
    for (let i = 0; i < hours; i++) {
    data.push(Math.floor(Math.random() * 100)); // Random data, replace with real data if available
    }
    return data;
};

// Generate labels for time range from 5 AM to 10 PM
function generateTimeRangeLabels(startHour, endHour) {
    const labels = [];
    for (let hour = startHour; hour <= endHour; hour++) {
    let period = hour < 12 ? 'AM' : 'PM';
    let displayHour = hour % 12 === 0 ? 12 : hour % 12; // Convert 24-hour format to 12-hour format
    labels.push(`${displayHour} ${period}`);
    }
    return labels;
};
