<!-- Modal for Manage TES Applicants -->
<div class="modal fade" id="tesModal" tabindex="-1" aria-labelledby="tesModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tesModalLabel">Manage TES Applicants</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- School Year Dropdown -->
            <div class="mb-3">
                <label for="schoolYear" class="form-label">School Year</label>
                <select class="form-select" id="schoolYear" name="schoolYear">
                    <option value="2023-2024">2023-2024</option>
                    <option value="2024-2025">2024-2025</option>
                    <option value="2025-2026">2025-2026</option>

                </select>
            </div>

            <!-- Semester Dropdown -->
            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <select class="form-select" id="semester" name="semester">
                    <option value="1">First Semester</option>
                    <option value="2">Second Semester</option>
                    <option value="3">Third Semester</option>

                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</div>
</div>