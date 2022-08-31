<div class="flex-1 p-6  bg-white rounded-lg mt-5">
    <canvas id="myChart"></canvas>
</div>

<script>
    const ctx = 'myChart';
    const myChart = new Chart(ctx, {
        data: {
            labels: [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ],
            datasets: [{
                type: 'line',
                label: 'Total Stok',
                data: [9, 13, 3, 5, 2, 3, 9, 14, 12, 5, 7, 4],
                backgroundColor: [
                    // januari
                    'rgba(255, 99, 132, 0.4)',
                    // februari
                    'rgba(54, 162, 235, 0.4)',
                    // maret
                    'rgba(169, 42, 242, 0.4)',
                    // april
                    'rgba(205, 21, 177, 0.4)',
                    //mei
                    'rgba(75, 192, 192, 0.4)',
                    //juni
                    'rgba(153, 102, 231, 0.4)',
                    //juli
                    'rgba(39, 245, 93, 0.4)',
                    //agustus
                    'rgba(21, 50, 205, 0.4)',
                    //september
                    'rgba(242, 42, 82, 0.4)',
                    //oktober
                    'rgba(51, 51, 255, 0.4)',
                    //november
                    'rgba(0, 204, 0, 0.4)',
                    // desember
                    'rgba(255, 159, 64, 0.4)',
                ],
                borderColor: 'blue',
                borderWidth: 2,
                tension: 0.4,
                pointBorderWidth: 7,
                pointHoverRadius: 12,
            }]
        },
        options: {
            interaction: {
                intersect: true
            },
            plugins: {
                legend: false,
                title: {
                    display: true,
                    text: 'Total Stok Bulanan'
                },
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Total Stok'
                    },
                    beginAtZero: true,
                }
            },
            responsive: true,
        }
    });
</script>
