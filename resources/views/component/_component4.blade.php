<style>
    .venn-diagram {
        width: 450px;
        height: 450px;
        position: relative;
    }

    .venn-diagram .circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        color: #fff;              /* teks putih */
        font-weight: bold;        /* teks tebal */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: absolute;
        padding: 15px;
        flex-direction: column;
    }

    .venn-diagram .circle h5 {
        color: #fff;              /* teks putih */
        font-weight: bold;
        margin: 0;
    }

    .circle-self {
        background: #1f497d;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .circle-people {
        background: #4f8a10;
        bottom: 0;
        left: 0;
    }

    .circle-org {
        background: #e69500;
        bottom: 0;
        right: 0;
    }

    .circle-center {
        background: #2e75b6;
        width: 160px;
        height: 160px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 14px;
        line-height: 1.3;
    }

    .circle i {
        font-size: 28px;
        margin-bottom: 8px;
        color: #fff;              /* ikon putih */
    }
</style>

<div id="overview" class="overview-area overflow-hidden default-padding-top">
    <div class="container">
        <div class="row">
            <!-- Bagian Kiri: Diagram -->
            <div class="col-lg-6 text-center">
                <div class="venn-diagram position-relative d-inline-block">
                    <!-- Lingkaran Leading Self -->
                    <div class="circle circle-self">
                        <i class="bi bi-person-gear"></i>
                        <h5>LEADING SELF</h5>
                    </div>
                    <!-- Lingkaran Leading People -->
                    <div class="circle circle-people">
                        <i class="bi bi-people-fill"></i>
                        <h5>LEADING PEOPLE</h5>
                    </div>
                    <!-- Lingkaran Leading Organization -->
                    <div class="circle circle-org">
                        <i class="bi bi-building"></i>
                        <h5>LEADING ORGANIZATION</h5>
                    </div>
                    <!-- Tengah: Strategic Digital Leadership -->
                    <div class="circle circle-center">
                        <i class="bi bi-lightbulb"></i>
                        <h5>STRATEGIC<br>DIGITAL<br>LEADERSHIP</h5>
                    </div>
                </div>
                <p class="mt-3"><strong>Digital Capabilities</strong></p>
            </div>

            <!-- Bagian Kanan: Deskripsi -->
            <div class="col-lg-6">
                <h2 class="area-title">
                    We empower organizations to develop <br>
                    <span class="text-primary">Strategic Digital Leaders</span>
                </h2>
                <p><strong>
                        We adopt a comprehensive delivery strategy to design effective talent development programs
                        that ignite participants' cognitive functions, enabling them to
                    </strong></p>
                <ol>
                    <li>Think strategically and innovatively.</li>
                    <li>Enhance decision-making and problem-solving skills.</li>
                    <li>Adapt to dynamic challenges with agility and confidence.</li>
                </ol>
                <p>
                    We ensure impactful and relevant transformation to drive your business growth through
                    enhancing innovation, execution capabilities and integrating personal, people, and
                    organizational mastery to deliver strategic leadership solutions.
                </p>
            </div>
        </div>
    </div>
</div>
