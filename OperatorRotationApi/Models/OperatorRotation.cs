namespace OperatorRotationApi.Models
{
    public class OperatorRotationBlock
    {
        public string? OperatorName { get; set; }
        public string? FromRide { get; set; }
        public string? FromPosition { get; set; }
        public string? ToRide { get; set; }
        public string? ToPosition { get; set; }
        public DateTime RotationTime { get; set; }
    }
}
