// Example College Data (you can expand this later)
const colleges = [
    { name: "Presidency University", formLink: "https://presiuniv.ac.in/web/admission.php" },
    { name: "Jadavpur University", formLink: "http://www.jaduniv.edu.in/" },
    { name: "University of Calcutta", formLink: "https://www.caluniv.ac.in/admission/" },
    { name: "St. Xavier's College", formLink: "https://admissions.sxccal.edu/" },
    { name: "Rabindra Bharati University", formLink: "https://rbu.ac.in/" }
    
];

// Function to display colleges
function displayColleges(collegesList) {
    const collegeList = document.getElementById('collegeList');
    collegeList.innerHTML = "";

    collegesList.forEach(college => {
        const card = document.createElement('div');
        card.className = 'college-card';
        card.innerHTML = `
            <h3>${college.name}</h3>
            <a href="${college.formLink}" target="_blank">Apply Now</a>
        `;
        collegeList.appendChild(card);
    });
}

// Filter colleges based on search
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchValue = e.target.value.toLowerCase();
    const filteredColleges = colleges.filter(college => 
        college.name.toLowerCase().includes(searchValue)
    );
    displayColleges(filteredColleges);
});

// Initial Load
displayColleges(colleges);