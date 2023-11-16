document.getElementById('button').addEventListener('click', (e) => {
    e.preventDefault()
    const input = document.getElementById('input').value;
    console.log(input);
    document.cookie = `name=${input};`;
    document.cookie = `date=${document.lastModified};`
}) 

//https://github.com/SamaSir2003/WTLAN/tree/main/WTLAB/Year%203/Semester%205/WT%20lab
