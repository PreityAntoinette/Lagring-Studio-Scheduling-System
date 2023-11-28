<?php
require_once 'session.php';

if (isset($_GET['date'])) 
    {
    $selectedDate = date('Y-m-d\TH:i', strtotime($_GET['date']));
    $today = date('Y-m-d');
    }

?>

<div class="container-form">
        <form class="pb-2" method="POST">
        <div class="input-container pb-1">   
            <label for="date">Date: </label>
            <input id="date" type="datetime-local"  min="<?php echo date("Y-m-d\TH:i"); ?>" value="<?php echo $selectedDate; ?>">
        </div>

            <div class="input-container pb-2">
            <label for="service" class="input-legend text-nowrap">Service:</label>
            <select class="form-control" id="service" name="service" required>
                <option value="option1">Photo ID</option>
                <option value="option2">Portraits</option>
                <option value="option3">Photo Develop</option>
                <option value="option4">Tarpaulin</option>
                <option value="option5">Digital Package</option>
                <option value="option6">Special Package</option>
                <option value="option7">Regular Package</option>
                <option value="option8">Budget Package</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="input-container pb-2">
            <label for="serviceInput" class="input-legend text-nowrap">Other Service:</label>
            <input type="text" class="form-control" id="serviceInput" name="serviceInput" maxlength="150" required>
        </div>

            <div class="input-container pb-3">
                <textarea name="event_description" maxlength="500" class="form-control" placeholder="Write event's description (Maximum of 500 characters including spaces)" required></textarea>
                <label for="eventTitle" class="input-legend text-nowrap">Event Description</label>
            </div>
           

            <div class="modal-footer">
                <button type="submit" name="submit" id="submitting" class="btn btn-warning text-dark">Submit</button>
                <button type="reset" id="clear" class="btn btn-secondary">Clear</button>
            </div>  
        </form>
</div>
