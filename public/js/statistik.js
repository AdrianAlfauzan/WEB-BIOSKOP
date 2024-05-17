const visitorData = [1000, 2500, 500, 2000, 3000, 2000, 1500, 2500, 3000];
const revenueData = [5000000, 12000000, 2700000, 7500000, 5000000, 13000000, 7500000, 11500000, 9000000];
const orderData = [50000, 125000, 25000, 100000, 150000, 100000, 75000, 125000, 150000];

const options = {
  chart: {
    type: "spline",
    backgroundColor: "#ffffff00",
  },
  title: {
    text: "STATISTICS",
    style: {
      color: "#000000", // Hitam
      fontSize: "1.5rem",
      fontWeight: "bold", // Tebal
    },
  },
  xAxis: {
    categories: ["Minggu 1", "Minggu 2", "Minggu 3", "Minggu 4", "Minggu 5", "Minggu 6", "Minggu 7", "Minggu 8", "Minggu 9"],
    labels: {
      style: {
        color: "#000000", // Hitam
      },
    },
  },
  yAxis: {
    title: {
      text: "Jumlah",
      style: {
        color: "#000000", // Hitam
        fontWeight: "bold", // Tebal
      },
    },
    labels: {
      style: {
        color: "#000000", // Hitam
      },
    },
  },
  plotOptions: {
    spline: {
      fillOpacity: 0.5,
      color: "#000000", // Hitam
      fontWeight: "bold", // Tebal
    },
  },
  series: [
    {
      name: "Pengunjung",
      data: visitorData,
      color: "#000000", // Hitam
    },
    {
      name: "Pendapatan",
      data: revenueData,
      color: "#000000", // Hitam
    },
    {
      name: "Pesanan",
      data: orderData,
      color: "#000000", // Hitam
    },
  ],
  responsive: {
    rules: [
      {
        condition: {
          maxWidth: 500,
        },
        chartOptions: {
          legend: {
            layout: "horizontal",
            align: "center",
            verticalAlign: "bottom",
            itemStyle: {
              color: "#000000", // Hitam
              fontWeight: "bold", // Tebal
            },
          },
        },
      },
    ],
  },
  credits: {
    enabled: false,
  },
};

// Inisialisasi dan menampilkan grafik
Highcharts.chart("chartContainer", options);
