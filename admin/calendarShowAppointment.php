<?php
require_once 'session.php';

if (isset($_GET['id'])) {
    $apt_id = mysqli_real_escape_string($connection, $_GET['id']);

    $stmt = $connection->prepare("SELECT * FROM appointment a, services b, users c WHERE a.user_id = c.user_id AND a.apt_id = ? AND a.service_id = b.service_id;");
    $stmt->bind_param("s", $apt_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $apt_datetime = $row['apt_datetime'];
        $apt_date = formatAppointmentDate($apt_datetime, $row['service_type']);
        $service_name = ucwords(strtolower($row['service_name']));
        $full_name = ucwords(strtolower($row['firstname'] . " " . $row['surname']));
        $service_type = $row['service_type']; // Assuming you have a service_type column in your services table
        $shoot_location = $row['apt_location']; // Assuming you have a shoot_location column in your appointment table
        $occasion_type = $row['apt_occasion_type']; // Assuming you have an occasion_type column in your appointment table
        $status = $row['apt_status'];
        $apt_submit_type = $row['apt_submit_type'];
        $walkin_fullname = $row['walkin_fullname'];
        $walkin_contact = $row['walkin_contact'];
    }
}

function formatAppointmentDate($apt_datetime, $service_type) {
    if ($service_type === 'BIG') {
        return date("M j, Y", strtotime($apt_datetime));
    } else {
        return date("M j, Y - g:i A", strtotime($apt_datetime));
    }
}
?>
<form action="">
    <!-- Who -->
    <div class="mb-2">
        <label for="date3">Set by:</label>
        <input type="text" id="date3" class="form-control" value="<?php echo $full_name ?>" disabled><br>
    </div>
   <!-- Additional fields for walk-in -->
   <?php if ($apt_submit_type === 'WALK-IN'): ?>
        <div class="mb-2">
            <label for="walkin_fullname">Customer Full Name:</label>
            <input type="text" id="walkin_fullname" class="form-control" disabled name="walkin_fullname" value="<?php echo $walkin_fullname; ?>" required><br>
        </div>
        <div class="mb-2">
            <label for="walkin_contact">Customer Contact:</label>
            <input type="text" id="walkin_contact" class="form-control" disabled name="walkin_contact" value="<?php echo $walkin_contact; ?>" required><br>
        </div>
    <?php endif; ?>
    <!-- What -->
    <div class="mb-2">
        <label for="">Service Name:</label>
        <input type="text" id="date2" class="form-control" value="<?php echo $service_name ?>" disabled><br>
    </div>
    <!-- When -->
    <div class="mb-2">
        <label for="date">Shoot Date:</label>
        <input type="text" id="date" class="form-control" value="<?php echo $apt_date ?>" disabled><br>
    </div>
    <!-- Where -->
    <?php if ($service_type === 'BIG'): ?>
        <div class="mb-2">
            <label for="occasionType">Occasion Type:</label>
            <input type="text" id="occasionType" class="form-control" value="<?php echo $occasion_type ?>" disabled><br>
        </div>
        <div class="mb-2">
            <label for="shootLocation">Shoot Location:</label>
            <input type="text" id="shootLocation" class="form-control" value="<?php echo $shoot_location ?>" disabled><br>
        </div>
        
    <?php endif; ?>
    <div class="mb-2">
            <label for="STAT">Status:</label>
            <input type="text" id="stat" class="form-control" value="<?php echo $status ?>" disabled><br>
        </div>
    <!-- Why (Approval) -->
    <br>
    </form>

<?php if ($status == 'PENDING') { ?>
    <div class="box mt-3 p-4">
        <form method="POST">
            <div class="row px-4 mx-4">
                <input type="hidden" name="apt_id" value="<?php echo $apt_id ?>">
                
                <label for="declined" class="radio-btn-label">
                    <input type="radio" id="declined" onclick="decline()"  name="approval" value="DECLINED" class="radio-btn" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class="radio-svg bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                        <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591"/>
                    </svg>
                    <span class="radio-label">Decline</span>
                </label>
          
                <label for="approved" class="radio-btn-label">
                    <input type="radio" id="approved"  onclick="approve()"  name="approval" value="APPROVED" class="radio-btn" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class=" radio-svg bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                    </svg>
                    <span class="radio-label">Approve</span>
                </label>
            </div>

            <div class="input-container pb-2" id="remarkContainer" style="display: none;">
                <label for="remark" class="text-nowrap">Remark:</label>
                <textarea name="remark" id="remark" class="form-control" maxlength="500" placeholder="Write your remark" ></textarea>
            </div>
            
            <div class="input-container pb-2" id="photographerContainer" style="display: none;">
                <label for="photographer" class="text-nowrap">Photographer:</label>
                <select class="form-control1" id="photographer" name="photographer">
                    <option value="" selected disabled>Select a photographer..</option>
                    <?php
                    $sql = mysqli_query($connection, "SELECT * FROM photographer WHERE photographer_status = 'ACTIVE'") or die(mysqli_error($connection));
                    while ($row = mysqli_fetch_array($sql)) {
                        $photographer_fullname = $row['photographer_fullname'];
                    ?>
                        <option value="<?php echo $photographer_fullname; ?>">
                            <?php echo $photographer_fullname; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="modal-footer">
                <button type="reset" id="clear" class="btn btn-secondary">Clear</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
   


    <style>
        .radio-btn {
            display: none;
        }

        .radio-svg {
            width: 24px;
            height: 24px;
            margin-right: 4px;
            fill: #c0cacc;
        }

        .radio-btn-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 8px;
            transition: background-color 0.3s;
        }

        .radio-btn:checked + .radio-svg {
            fill: #3299a8;
        }

        .radio-btn:checked + .radio-svg + .radio-label {
            color: #3299a8;
            font-weight: bold;
        }
    </style>
<?php } ?>




<!-- Other HTML code above... -->



<!-- Other HTML code below... -->
