<style>
    .accordion {
    display: flex;
    flex-direction: column;
    max-width: 991px;
    min-width: 320px;
    margin: 50px auto;
    padding: 50px 50px;
    border-radius: 46px;
    background: rgba(217, 217, 217, 0.7);
}
.accordion h1 {
    font-size: 32px;
    font-weight:800;
    text-align: center;
}
.accordion-item {
    margin-top: 16px;
    border: 1px solid #fcfcfc;
    border-radius: 6px;
    background: #ffffff;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;
}
.accordion-item .accordion-item-title {
    position: relative;
    margin: 0;
    display: flex;
    width: 100%;
    font-size: 15px;
    font-weight:600;
    cursor: pointer;
    justify-content: space-between;
    flex-direction: row-reverse;
    padding: 14px 20px;
    box-sizing: border-box;
    align-items: center;
}
.accordion-item .accordion-item-desc {
    display: none;
    font-size: 14px;
    line-height: 22px;
    font-weight: 400;
    color: #444;
    border-top: 1px dashed #ddd;
    padding: 10px 20px 20px;
    box-sizing: border-box;
}
.accordion-item input[type="checkbox"] {
    position: absolute;
    height: 0;
    width: 0;
    opacity: 0;
}
.accordion-item input[type="checkbox"]:checked ~ .accordion-item-desc {
    display: block;
}
.accordion-item
    input[type="checkbox"]:checked
    ~ .accordion-item-title
    .icon:after {
    content: "-";
    font-size: 20px;
}
.accordion-item input[type="checkbox"] ~ .accordion-item-title .icon:after {
    content: "+";
    font-size: 20px;
}
.accordion-item:first-child {
    margin-top: 0;
}
.accordion-item .icon {
    margin-left: 14px;
}

@media screen and (max-width: 767px) {
    .accordion {
        border-radius: 0;
        padding-left:3%;
        padding-right:3%;
    }
    .accordion h1 {
        font-size: 22px;
    }
    .small_text{
        font-size: 12px;
    }
}

</style>

<div class="accordion faq-group" id="faqs_careers">
    <h1>FAQs - Careers</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordionA">
        <label for="accordionA" class="accordion-item-title"><span class="icon"></span>How can I join St. Genevive?</label>
        <div class="accordion-item-desc"><p>At St. Genevive, we welcome individuals who are passionate about making a positive impact on the lives of others. Joining our dedicated team is a simple and rewarding process. Here's a step-by-step guide:</p>

    <ol>
        <li><strong>Explore Opportunities:</strong> Browse through our current job openings on our <a href="https://www.lavenduct.com/stghs/careers"><strong>Careers page</strong></a> to find positions that align with your skills, interests, and career goals.</li>

        <li><strong>Submit Your Application:</strong> Once you've identified a position of interest, complete the online application form. Ensure you provide all required information, including your resume and a cover letter outlining your qualifications and why you want to be a part of St. Genevive.</li>

        <li><strong>Application Review:</strong> Our HR team will carefully review your application to assess your qualifications and suitability for the role.</li>

        <li><strong>Interview Process:</strong> If your application aligns with our current needs, you may be invited for an interview. This could be conducted in-person, over the phone, or via video call, depending on the circumstances.</li>

        <li><strong>Assessment and References:</strong> Depending on the position, you may be asked to complete additional assessments or provide professional references.</li>

        <li><strong>Offer and Onboarding:</strong> Congratulations! If selected, you will receive a job offer. Once accepted, our onboarding process will help you seamlessly integrate into the St. Genevive family.</li>
    </ol>
</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordionB">
        <label for="accordionB" class="accordion-item-title"><span class="icon"></span>What positions are currently available at St. Genevive?</label>
        <div class="accordion-item-desc"> A: Our job openings are regularly updated on our <a href="https://www.lavenduct.com/stghs/careers"><strong>Careers page</strong></a>. Visit to explore current opportunities.</p></div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordionC">
        <label for="accordionC" class="accordion-item-title"><span class="icon"></span>Can I apply for multiple positions?</label>
        <div class="accordion-item-desc">A: Absolutely! Feel free to apply for any positions that match your skills and interests. Each application will be reviewed independently.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordionD">
        <label for="accordionD" class="accordion-item-title"><span class="icon"></span>Are there opportunities for career growth at St. Genevive</label>
        <div class="accordion-item-desc">A: Yes, we encourage professional development and provide opportunities for career advancement within our organization.</div>
    </div>

</div>

