using Microsoft.AspNetCore.Mvc;
using OperatorRotationApi.Models;
using System;
using System.Collections.Generic;
using System.Linq;

namespace OperatorRotationApi.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class RotationsController : ControllerBase
    {
        // Dummy in-memory data store
        private static readonly List<OperatorRotationBlock> Rotations = new List<OperatorRotationBlock>
        {
            new OperatorRotationBlock
            {
                OperatorName = "John",
                FromRide = "Ride 1",
                FromPosition = "Operator 1",
                ToRide = "Ride 2",
                ToPosition = "Operator 2",
                RotationTime = DateTime.Parse("2025-07-23T14:00:00")
            },
            new OperatorRotationBlock
            {
                OperatorName = "Jane",
                FromRide = "Ride 2",
                FromPosition = "Operator 1",
                ToRide = "Ride 1",
                ToPosition = "Operator 2",
                RotationTime = DateTime.Parse("2025-07-23T14:02:00")
            }
        };

        // GET: api/rotations

        [HttpGet]
        public ActionResult<IEnumerable<OperatorRotationBlock>> GetAll()
        {
            return Ok(Rotations.OrderBy(r => r.RotationTime));
        }

        // POST: api/rotations
        [HttpPost]
        public ActionResult<OperatorRotationBlock> AddRotation([FromBody] OperatorRotationBlock newRotation)
        {
            if (newRotation == null)
                return BadRequest();

            Rotations.Add(newRotation);
            return CreatedAtAction(nameof(GetAll), new { }, newRotation);
        }
        // DELETE: api/rotations
        [HttpDelete]
        public ActionResult RemoveRotation([FromBody] OperatorRotationBlock toRemove)
        {
            var rotation = Rotations.FirstOrDefault(r =>
                r.OperatorName == toRemove.OperatorName &&
                r.RotationTime == toRemove.RotationTime);

            if (rotation == null)
                return NotFound();

            Rotations.Remove(rotation);
            return NoContent();
        }
        // GET api/rotations/next
        [HttpGet("next")]
        public ActionResult<OperatorRotationBlock> GetNext()
        {
            // Use UTC or local consistently
            var now = DateTime.UtcNow;
            var next = Rotations
                .Where(r => r.RotationTime.ToUniversalTime() > now)
                .OrderBy(r => r.RotationTime)
                .FirstOrDefault();

            if (next == null) return NoContent();  // 204
            return Ok(next);
        }

    }
}
