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
    font-weight:500;
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

#faqs_health, #faqs_careers{
    display:none;
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

<div class="accordion faq-group" id="faqs_health">
    <h1>FAQs - Health Care</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1">
        <label for="accordion1" class="accordion-item-title"><span class="icon"></span>What type of services do you offer?</label>
        <div class="accordion-item-desc">We provide a range of care services for the elderly and children & adults with disabilities—all of them part of Louisiana's Department of Health waiver programs to serve those in homes and in the community. To find out more about each service, visit here.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2">
        <label for="accordion2" class="accordion-item-title"><span class="icon"></span>Who do you have as support staff?</label>
        <div class="accordion-item-desc">Only well-screened, trained, and certified Care Support Staff—to ensure the community we attend to in Louisiana high quality care. We deeply understand that a service is only as strong as its staff, which is why we heavily invest in them so they bring greater care to your near and dear.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3">
        <label for="accordion3" class="accordion-item-title"><span class="icon"></span>What medical insurance do you accept?</label>
        <div class="accordion-item-desc">We accept anyone with Medicaid, Medicare, and Private Insurance. While many care providers only cater to one and refuse the others, we’ve consciously worked through tedious administration to be able to open our doors to anyone needing quality care..</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4">
        <label for="accordion4" class="accordion-item-title"><span class="icon"></span>Do you have a religious affiliation?</label>
        <div class="accordion-item-desc">No, we don’t. Since our inception, our purpose was always to provide compassionate, quality care to anyone who needed it—without discrimination of anyone or favoritism for a religious group.</div>
    </div>

</div>


