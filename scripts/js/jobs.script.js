const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Host': 'jsearch.p.rapidapi.com',
        'X-RapidAPI-Key': 'cc09024757msh698d38bb6e3c861p1ed49bjsncf2e97ddfe8d'
    }
};

document.getElementById('job-search-form').addEventListener('submit', (e) => {
    e.preventDefault();

    const role = document.getElementById('job-role').value.trim();
    const location = document.getElementById('job-location').value.trim();

    if (!role || !location) {
        alert('Please enter both a job role and location.');
        return;
    }

    const url = `https://jsearch.p.rapidapi.com/search?query=${encodeURIComponent(role)}&location=${encodeURIComponent(location)}&num_pages=1`;

    fetch(url, options)
        .then(response => response.json())
        .then(data => {
            displayJobs(data.data);
        })
        .catch(err => console.error(err));
});

function displayJobs(jobs) {
    const jobListings = document.getElementById('job-listings');
    jobListings.innerHTML = ''; // Clear previous content

    if (jobs.length === 0) {
        jobListings.innerHTML = '<p class="text-center text-xl col-span-full text-gray-600">No jobs found for your search criteria.</p>';
        return;
    }

    jobs.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.className = 'job-card bg-white p-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105';

        const title = job.title || 'No title available';
        const company = job.employer_name || 'Company name not available';
        const location = job.job_city || job.job_state || 'Remote';
        const salary = job.job_salary || 'Salary not disclosed';
        const applyLink = job.job_apply_link || '#';

        jobElement.innerHTML = `
            <h3 class="text-xl font-semibold text-gray-800">${title}</h3>
            <p class="text-gray-600 mt-2"><strong>Company:</strong> ${company}</p>
            <p class="text-gray-600 mt-1"><strong>Location:</strong> ${location}</p>
            <p class="text-gray-600 mt-1"><strong>Salary:</strong> ${salary}</p>
            <a href="${applyLink}" target="_blank" class="text-blue-500 font-bold mt-4 inline-block hover:text-blue-700">Apply Now</a>
        `;

        jobListings.appendChild(jobElement);
    });
}